<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;


class CommentController extends Controller
{
         /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $comments = Comment::paginate(10);
            return view("admin.comments.index",
            [
                'comments'  =>  $comments
            ]);
        }

    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $comment = Comment::find($id);
            return view("admin.comments.edit")->with('comment',$comment);
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
            $comment = $request->comment ;

            $validated = $request->validate([
                'comment' => 'required',
            ]);

            $com = Comment::find($id);
            $com->comment = $comment;
            $com->save();

            return redirect()->route('comments.index')->with('success','Comment Updated Succefully !!');
        
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            Comment::destroy($id);

            return redirect()->route('comments.index')->with('success','Comment Removed Succefully !!');

        }
}
