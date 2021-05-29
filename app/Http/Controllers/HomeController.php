<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Categorie::all();
        $products_3 = Product::orderByDesc('created_at')->where('active',1)->limit(3)->get();
        $products_pop_3 = Product::orderByDesc('views')->where('active',1)->limit(3)->get();

        return view('index',[
            'categories' => $categories,
            'products_3' => $products_3,
            'products_pop_3' => $products_pop_3
            ]);
    }
}
