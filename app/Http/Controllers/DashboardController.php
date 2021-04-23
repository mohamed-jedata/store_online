<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Util;

class DashboardController extends Controller
{
    public function index(){

        //count total
        $count_members = User::count();
        $count_products = Product::count();
        $count_pend_products = Product::where('active',0)->count();
        $count_comments = Comment::count();

        //get lastest 
        $lastest_users =  User::all(
            "id",
            DB::raw("CONCAT(first_name,' ',last_name) as full_name")
        );
        $lastest_products =  Product::all();
        $lastest_comments =  Comment::all();

        

        return view("admin.dashboard",[
            //count total
            "count_members"       => $count_members,
            "count_products"      => $count_products,
            "count_pend_products" => $count_pend_products,
            "count_comments"      => $count_comments,
            //get lastest 
            "lastest_users"       => $lastest_users,
            "lastest_products"    => $lastest_products,
            "lastest_comments"    => $lastest_comments
        ]);
    }
}
