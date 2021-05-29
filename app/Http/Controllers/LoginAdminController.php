<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
    public function index(){
        return view("admin.login");
    }

    public function authenticate(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password, 'is_admin' => 1])) {
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard');
        }

        return redirect()->route("admin.login");
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ]);
    }


}
