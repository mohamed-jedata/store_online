<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FProductController extends Controller
{

    private static $IMAGE_PATH = 'public/uploads/products/';



    public function show($id){

        $product = Product::findOrFail($id);

        if($product->active==0){
            if(Auth::check() == FALSE){
               return abort(404);
            }else{
                if($product->user->id != Auth::id()){
                    return abort(404);
                }   
            }
        }

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

    public function create(){

     $categories = Categorie::all('id','name');
         return view("create_product",["categories"=>$categories]);
    }

    public function insert(Request $request){

     $name = $request->name;
     $price = $request->price;
     $stock =$request->stock;
     $country = $request->country;
     $cat_id = $request->cat_id;
     $description = $request->description;
     $main_image = $request->file('main_image');
     $images = "";
     $visible = $request->visible;
     $allow_comments = $request->allow_comments;
     $tags = $request->tags;
     
     $user_id = Auth::id();

     $validated = $request->validate([
         'name' => 'required|string|min:3|max:100',
         'price' => 'bail|required|numeric|min:0',
         'stock' => 'bail|required|numeric|min:0',
         'country' => 'required|string',
         'description' => 'required|string|min:10',
         'cat_id' => 'required|numeric|min:0',
         'main_image' => 'bail|required|image|mimes:jpeg,jpg,png',
         'visible' => 'boolean',
         'allow_comments' => 'boolean',
         'tags' => 'required|string|min:2',
     ]);

     //store Product main image
     $main_image_name = time() . '_' . uniqid() . '.' . $main_image->getClientOriginalExtension();
     $main_image->storeAs($this::$IMAGE_PATH,$main_image_name);
     $main_image = $main_image_name;

     //store other images of product if they are uploaded
     if($request->hasFile('images')){
         $request->validate([
             'images.*' => 'mimes:jpeg,jpg,png|max:20000'
             ]
         );
         $images = $request->file('images');
         $images_names = array();

         foreach ($images as $image) {
             $img_name = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
             $image->storeAs($this::$IMAGE_PATH,$img_name); 
             $images_names[] = $img_name ;
         }                
         $images =implode("|",$images_names); 
     }
  
     Product::create([
         'name'=>$name,'description'=>$description,'price'=>$price,
         'country'=>$country,'main_image'=>$main_image,'images'=>$images,
         'tags'=>$tags,'visible'=>$visible,'allow_comments'=>$allow_comments,
         'stock'=>$stock,'active'=>'0','user_id'=>$user_id,'cat_id'=>$cat_id]);

     return redirect()->route('profile')->with('success','Product est ajoutée avec success !!');


    }


    public function edit($id){

          $product = Product::find($id);
          $categories = Categorie::all('id','name');

          return view("edit_product",[
               "product" => $product,
               "categories" => $categories
          ]);

    }


    public function update(Request $request, $id){

        $name = $request->name;
        $price = $request->price;
        $description = $request->description;
        $country = $request->country;
        $cat_id = $request->cat_id;
        $main_image = "";
        $images = "";
        $visible = $request->visible;
        $allow_comments = $request->allow_comments;
        $tags = $request->tags;
        $stock =$request->stock;

        $validated = $request->validate([
            'name' => 'required|string|min:3|max:100',
            'price' => 'bail|required|numeric|min:0',
            'stock' => 'bail|required|numeric|min:0',
            'country' => 'required|string',
            'description' => 'required|string|min:10',
            'cat_id' => 'required|numeric|min:0',
            'visible' => 'boolean',
            'allow_comments' => 'boolean',
            'tags' => 'required|string|min:2',
        ]);

        $product = Product::find($id);

        //store Product main image
        if($request->hasFile("main_image")){
            $main_image = $request->file("main_image");
            $request->validate([
                'main_image' => 'bail|required|image|mimes:jpeg,jpg,png',
            ]);
            $this->delete_images($product->main_image);
            $main_image_name = time() . '_' . uniqid() . '.' . $main_image->getClientOriginalExtension();
            $main_image->storeAs($this::$IMAGE_PATH,$main_image_name);
            $main_image = $main_image_name;
        }else{
            $main_image = $product->main_image;
        }

        //store other images of product if they are uploaded
        if($request->hasFile('images')){
            $request->validate([
                'images.*' => 'mimes:jpeg,jpg,png|max:20000'
                ]
            );
            $this->delete_images($product->images);

            $images = $request->file('images');
            $images_names = array();
            foreach ($images as $image) {
                $img_name = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->storeAs($this::$IMAGE_PATH,$img_name); 
                $images_names[] = $img_name ;
            }                
            $images =implode("|",$images_names); 
        }else{
            $images = $product->images;
        }

        $product->update([
            'name'=>$name,'description'=>$description,'price'=>$price,
            'country'=>$country,'main_image'=>$main_image,'images'=>$images,
            'tags'=>$tags,'visible'=>$visible,'allow_comments'=>$allow_comments,
            'stock'=>$stock,'active'=>'0','cat_id'=>$cat_id]);

        return redirect()->route('profile')->with('success','Produit est modifiée avec success !!');


  }


    public function add_comment(Request $request,$pro_id){

        
        $validated = $request->validate([
            'comment' => 'required|string|min:3',
        ]);

        $comment = $request->comment;
        $user_id = Auth::id();
        $product_id = $pro_id;

       
        $com = new Comment();
        $com->user_id = $user_id;
        $com->pro_id = $pro_id;
        $com->comment = $comment;
        $com->save();


        return redirect()->route('product-page',$product_id);
    }
















}
