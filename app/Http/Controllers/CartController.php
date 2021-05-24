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
        $total =0;

        if($products_ids==null){
            $products= [];
            $products_ids = [];
        }
        if(count($products_ids) > 0)
        {
            foreach($products_ids as $pro_id){
                $products[]  = Product::find($pro_id);
                $total += Product::find($pro_id)->price;
            }
        }
        
        session(["nb_items" => count($products)]);
        

        return view('cart')->with([
            'products'=>$products,
            'total' =>$total
            ]);
    }

    public function create(Request $request){
 
         $this->addToProductsSession($request->product_id);
         
         return redirect()->route('cart.index');
     }



     public function delete($id){
       
        $this->deleteFromProductsSession($id);
        
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
