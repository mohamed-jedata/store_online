<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FProductController extends Controller
{
    public function show($id){

        $product = Product::findOrFail($id);

        $tags = explode(',',$product->tags);
        $comments = $product->comments;

        if(!empty(trim($product->images))){
             $images = explode('|',$product->images);
        }else{
             $images =[];
        }
    
        return view("product",[
            'product' => $product,
            'tags' => $tags,
            'comments' => $comments,
            'images' => $images,
         ]);
    }
}
