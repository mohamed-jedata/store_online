<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $categories = Categorie::paginate(10);
            return view("admin.categories.index",['categories' => $categories]);
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view("admin.categories.add");
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
            $description = $request->description;

            $validated = $request->validate([
                'name' => 'required|string|min:3|max:50',
                'description' => 'required|string|min:10'
            ]);

            Categorie::create([
                'name' => $name,
                'description' => $description
            ]);

            return redirect()->route('categories.index')->with('success','Category Added Succefully !!');

        }


        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $cat = Categorie::find($id) ;
            return view("admin.categories.edit")->with("category",$cat);
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
            $name = $request->name;
            $description = $request->description;

            $validated = $request->validate([
                'name' => 'required|string|min:3|max:50',
                'description' => 'required|string|min:10'
            ]);

            $cat = Categorie::find($id);
            $cat->update([
                'name' => $name,
                'description' => $description
            ]);

            return redirect()->route('categories.index')->with('success','Category Updated Succefully !!');
  
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            Categorie::destroy($id);
            return redirect()->route('categories.index')->with('success','Category Removed Succefully !!');
  
        }
}
