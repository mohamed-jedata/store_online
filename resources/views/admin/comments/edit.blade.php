@extends('admin/includes/layout')

@php
 $title = "Edit Comment";
@endphp

@section('title',$title)

@section('content')

<div class="comments">

    <h1>{{$title}}</h1>



    <div class="errors form-group row justify-content-md-center">
      <div class="col-sm-6">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      </div>
    </div>

    
<form method="POST" action="{{route('comments.update',$comment->id)}}" >
  @csrf
  @method('put')
  <div class="form-group row justify-content-md-center">
    <label for="fname" class="col-sm-2 col-form-label" > Product Name</label>
    <div class="col-sm-6">
      <input type="text" name="name" value="{{$comment->product->name}}" class="form-control" id="pro_name" readonly> 
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="fname" class="col-sm-2 col-form-label"> Email</label>
    <div class="col-sm-6">
      <input type="email" name="name" value="{{$comment->user->email}}" class="form-control" id="email" readonly>
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="full_name" class="col-sm-2 col-form-label"> Full Name</label>
    <div class="col-sm-6">
      <input type="email" name="full_name" value="{{$comment->user->first_name .' '.$comment->user->last_name}}" class="form-control" id="full_name" readonly>
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="comment" class="col-sm-2 col-form-label">Comment</label>
    <div class="col-sm-6">
      <textarea type="text" rows="5" name="comment" class="form-control" id="comment">{{$comment->comment}}</textarea>
    </div>
  </div>


  <div class="form-group row justify-content-md-center">
    <div class="col-sm-4">
      <button type="submit" class="btn btn-primary"><i class="fas fa-pen"></i> {{$title}}</button>
      <button type="button"  class="btn btn-danger clickOnDelete"><i class="fas fa-trash"></i> Delete</button>
    </div>
  </div>
</form>

    
  <!-- remove record when onclick on delete above -->
  <form method="POST" style="display: none;" action="{{route('comments.destroy',$comment->id)}}">
    @csrf
    @method('delete')
    <button type="submit"  id="confirm" class="btn btn-danger delete"><i class="fas fa-trash"></i> Delete</button>
  </form>


</div>


  
   
  
@endsection