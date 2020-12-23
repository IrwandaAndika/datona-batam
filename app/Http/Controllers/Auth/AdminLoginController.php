<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        // Validate Form 
        $this->validate($request, 
            [
                'email' => 'required|string|email',
                'password' => 'required|string|min:8'
            ]
        );

        // Attempt to login as admin
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successfull then redirect to intended route or admin dashboard
            return redirect()->intended(route('admin.dashboard'))->with('massage', 'Welcome To Datona Admin Dashboard');
        }

        // if successfull then redirect back to login page with email and remember fields
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
