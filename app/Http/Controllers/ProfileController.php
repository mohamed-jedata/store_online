<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public  function index(){

        $user = Auth::user();
        $products = $user->products->sortBy("active");
        $comments = $user->comments;

        return view("profile",[
            "user" => $user,
            "products" => $products,
            "comments" => $comments,
        ]);
    
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
