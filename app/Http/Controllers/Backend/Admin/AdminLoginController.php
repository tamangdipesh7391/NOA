<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Backend\Common\BackendController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends BackendController
{


    public function index()
    {
        if (Auth::guard('admin')->user()) {
            return redirect()->intended(route('dashboard'))->with('success', "Welcome back ");
        } else {
            return view($this->backendPath . 'admin-login.index', $this->data);
        }

    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],
            [
                'username.required' => 'Enter username',
                'password.required' => 'Enter password',
            ]);

        $username = $request->username;
        $password = $request->password;

        if (Auth::guard('admin')->attempt(['username' => $username, 'password' => $password])) {
            $loginStatus = Auth::guard('admin')->user();
            $loginStatus->login_status = 1;
            $loginStatus->save();
            return redirect()->intended(route('dashboard'))->with('success', "Welcome back ");
        } else {
            return redirect()->back()->with('error', "Username & Password Incorrect");
        }

    }


    public function logout()
    {
        $loginStatus = Auth::guard('admin')->user();
        $loginStatus->login_status = 0;
        $loginStatus->save();
        Auth::guard('admin')->logout();
        return redirect()->intended('admin-login');
    }
}
