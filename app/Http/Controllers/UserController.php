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

//     public function showVerificationForm()
// {
//     return view('verify');
// }

// public function VerifyEmail(Request $request)
//     {
//         $validate = Validator::make($request->all(),[
//             'code' => 'required|numeric'
//         ]);

//         if($validate->fails()){
//             return response()->json([
//                 'status' => 400,
//                 'message' => __("http-statuses.400"),
//                 'data' => $validate->getMessageBag(),
//             ], 400);
//         }
   
//         $user = auth()->user();

//         if(!$user->email_verified_at)
//         {
//             if(now() >= $user->expires_at){
//                 return redirect()->route('register')->with('status', 'Verification code sent to your email.');
//             }

//             if($request->code && $request->code == $user->email_code){
//                 $user->email_verified_at = now();
//                 if($user){
//                     return view('')
//                 }
//             }

//             return response()->json([
//                 'status' => 406,
//                 'message' => __("http-statuses.406")
//             ], 406);
//         }

//         return response()->json([
//             'status' => 403,
//             'message' => __("http-statuses.403")
//         ], 403);
//     }
    
    
}
