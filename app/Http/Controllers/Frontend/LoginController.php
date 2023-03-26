<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\PasswordResetMail;
use App\Models\User\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('frontend.pages.login.login');
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $email = $request->email;
            $password = $request->password;
            if (Auth::guard('web')->attempt(['email' => $email, 'password' => $password])) {
                $user = Auth::guard('web')->user();
                if (
                    isset($user->account_status)
                    && $user->account_status === "active"
                ) {
                    return redirect()->route('member-dashboard');
                } else {
                    return redirect()->back()->with('error', 'Your account is not active yet. Please contact with admin.');
                }
            } else {
                return redirect()->back()->with('error', 'Invalid credentials');
            }

        }

        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('index');
    }

    public function forgotPassword(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('frontend.pages.login.forgot');
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'email' => 'required|email',
            ]);

            $email = $request->email;
            $user = User::where('email', $email)->first();
            if ($user) {
                $token = Str::random(60);
                $user->password_reset_token = $token;
                $user->save();

                $data = [
                    'name' => $user->name,
                    'email' => $user->email,
                    'token' => $token,
                ];

                if (Mail::to("tamangdipesh7391@gmail.com")->send(new PasswordResetMail($data))) {
                    return redirect()->back()->with('success', 'Please check your email to reset your password.');
                } else {
                    return redirect()->back()->with('error', 'Something went wrong');
                }
            } else {
                return redirect()->back()->with('error', 'Invalid email address');
            }
        }


        return redirect()->back()->with('error', 'Something went wrong');
    }
}
