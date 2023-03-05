<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
                return redirect()->route('member-dashboard');
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
}
