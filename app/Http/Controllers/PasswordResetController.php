<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use App\Mail\PasswordResetMail;

class PasswordResetController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('email');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $verification_code = Str::random(5);

        Mail::to($request->email)->send(new PasswordResetMail($verification_code));

        return back()->with('status', 'We have emailed your password reset link!');
    }


 
}
