<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class FCategorieController extends Controller
{
    public function show($id){

       $category = Categorie::findOrFail($id);
       $products = $category->products->where('active',1);

       return view('category')->with([
            'category'=>$category,
            'products'=>$products
       ]);
    }
}
