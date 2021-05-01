<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CartController extends Controller
{
    public function index(){


        // $this->deleteFromProductsSession(3);


        
        $products_ids = session("products");
        $products = [];

        if($products_ids==null){
            $products= [];
        }
        if(count($products_ids) > 0)
        {
            foreach($products_ids as $pro_id){
                $products[]  = Product::find($pro_id);
            }
        }
            

        return view('cart')->with('products',$products);
    }

    public function create(Request $request){
 
         $this->addToProductsSession($request->product_id);
         
         return redirect()->route('cart.index');
     }

     
     private function addToProductsSession($product_id){
         $this->deleteFromProductsSession($product_id);
        session()->push('products',$product_id );
     }

     private function deleteFromProductsSession($idToDelete){
        $products = session()->pull('products', []); // Second argument is a default value
        if(($key = array_search($idToDelete, $products)) !== false) {
            unset($products[$key]);
        }
        session()->put('products', $products);
     }

  

}
