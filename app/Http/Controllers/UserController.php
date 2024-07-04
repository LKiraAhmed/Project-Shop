<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use App\Mail\VerificationCodeMail;
use Illuminate\Support\Facades\Mail;
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')],
            'password' => ['required'],
            'phone' => ['nullable', 'string'],
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->save();

        return redirect()->route('login')->with('status', 'Verification code sent to your email.');
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
    public function showVerificationForm()
{
    return view('verify');
}

public function verify(Request $request)
{
    $request->validate([
        'verification_code' => 'required|string|exists:users,verification_code',
    ]);

    $user = User::where('verification_code', $request->verification_code)->first();

    if ($user) {
        $user->email_verified_at = now();
        $user->verification_code = null; 
        $user->save();

        return redirect()->route('home')->with('status', 'Email verified successfully.');
    }

    return back()->withErrors(['verification_code' => 'Invalid verification code.']);
}

    
    
}
