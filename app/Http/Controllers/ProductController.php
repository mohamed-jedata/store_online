<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Cache\TagSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

        private static $IMAGE_PATH = 'public/uploads/products/';

         /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $products = Product::all();
            
            return view("admin.products.index",['products'=>$products]);
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            $categories = Categorie::all('id','name');
            return view("admin.products.add")->with("categories",$categories);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $name = $request->name;
            $price = $request->price;
            $description = $request->description;
            $country = $request->country;
            $cat_id = $request->cat_id;
            $main_image = $request->file('main_image');
            $images = "";
            $visible = $request->visible;
            $allow_comments = $request->allow_comments;
            $tags = $request->tags;
            $stock =$request->stock;
            $user_id = "8";

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
                'stock'=>$stock,'active'=>'1','user_id'=>$user_id,'cat_id'=>$cat_id]);

            return redirect()->route('products.index')->with('success','Product Added Succefully !!');

        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            return view("admin.products.edit");
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
        }

        private function delete_images($images){

            if(!empty($images)  ){

                if(str_contains($images,'|')) {
                    $images_names = explode('|',$images);
                    foreach($images_names as $img){
                        Storage::delete($this::$IMAGE_PATH.$img);
                    }
                    return 'multiple';

                }else{
                    Storage::delete($this::$IMAGE_PATH.$images);
                    return 'one';
                }
            }
        }


}
