<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use App\Mail\VerifyEmail;
use App\Mail\ResetPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('registration');
    }

    public function create(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required'],
            'phone' => ['nullable'],
        ]);
    
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->save(); 
    
        // Generate OTP code
        $code = rand(100000, 999999);
        session(['otp' => $code, 'otp_email' => $user->email]);
    
        // Send the OTP via email
        Mail::to($user->email)->send(new VerifyEmail($code, $user));
    
        return redirect()->route('verify.form', ['email' => $user->email])->with('status', 'Verification code sent to your email.');
    }
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return back()->withErrors([
                'email' => 'Invalid email or password.',
            ])->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flush();
 
        return redirect('login');
    }

    public function email(){
        return view('emai-page');
    }

    
    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
    
        $email = $request->input('email');
        $user = User::where('email', $email)->first();
    
        if ($user) {
            Mail::to($email)->send(new ResetPassword($user));
            return redirect()->back()->with('success', 'Reset link sent successfully!');
        } else {
            return redirect()->back()->with('error', 'User not found!');
        }
    }
    
 
    public function reset(){
        return view('password-rest');
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);

        $user = Auth::user();

        if ($user) {
            $user->password = Hash::make($request->input('password'));
            $user->save();
        }

        return redirect()->route('login')->with('success', 'Password updated successfully!');
    }
    public function showVerifyForm(Request $request)
    {
        $email = $request->query('email');
        return view('verify', ['email' => $email]);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate(['code' => 'required|numeric']);
        $inputCode = $request->input('code');
        $sessionCode = session('otp');
        $sessionEmail = session('otp_email');

        if ($inputCode == $sessionCode && $request->input('email') == $sessionEmail) {
    
            session()->forget(['otp', 'otp_email']);
            return redirect()->route('login')->with('success', 'Email verified successfully! Please login.');
        } else {
            return redirect()->route('verify.form', ['email' => $request->input('email')])->withErrors(['code' => 'Invalid OTP code.']);
        }
    }








    
}
