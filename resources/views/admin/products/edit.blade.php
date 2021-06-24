@extends('admin/includes/layout')

@php
 $title = "Edit Product";
@endphp

@section('title',$title)

@section('content')

<div class="add-pro">

<h1>{{$title}}</h1>

<div class="errors form-group row justify-content-md-center">
  <div class="col-sm-8">
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


<form  action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data"> 
    @csrf
    @method('PUT')
    <div class="form-group row justify-content-md-center">
    <label for="name" class="col-sm-2 col-form-label">Product Name</label>
    <div class="col-sm-6"">
      <input type="text" name="name" value="{{$product->name}}" class="form-control" id="name">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="price" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-6">
      <input type="text" name="price" value="{{$product->price}}" class="form-control" id="price">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="stock" class="col-sm-2 col-form-label">Stock</label>
    <div class="col-sm-6">
      <input type="text" name="stock" value="{{$product->stock}}" class="form-control" id="stock">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="price" class="col-sm-2 col-form-label">Country</label>
    <div class="col-sm-6">
      <input type="text" name="country" value="{{$product->country}}" class="form-control" id="price">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="user_id" class="col-sm-2 col-form-label">User</label>
    <div class="col-sm-6">
      <select name="user_id" class="form-control" id="user_id">
      @foreach($users as $user)
        @if($product->user_id == $user->id)
          <option value="{{$user->id}}" selected="true">{{$user->full_name}}</option>
        @else
          <option value="{{$user->id}}">{{$user->full_name}}</option>
        @endif
      @endforeach
      </select>
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="cat_id" class="col-sm-2 col-form-label">Categroy</label>
    <div class="col-sm-6">
      <select name="cat_id" class="form-control" id="cat_id">
      @foreach($categories as $cat)
        @if($product->cat_id == $cat->id)
          <option value="{{$cat->id}}" selected="true">{{$cat->name}}</option>
        @else
          <option value="{{$cat->id}}">{{$cat->name}}</option>
        @endif
      @endforeach
      </select>
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-6">
      <textarea type="text" name="description" rows="5" class="form-control" id="description">{{$product->description}}</textarea>
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="main_image" class="col-sm-2 col-form-label">Main Image</label>
    <div class="col-sm-6">
      <input type="file" name="main_image" class="form-control btn btn-light" id="main_image">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="images" class="col-sm-2 col-form-label">Other Images</label>
    <div class="col-sm-6">
      <input type="file" name="images[]" multiple class="form-control btn btn-light" id="images">
    </div>
  </div>


  <div class="form-group row justify-content-md-center">
    <label for="visible" class="col-sm-2 col-form-label">Visible</label>
    <div class="col-sm-6">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="visible" id="falseV" value="0"
           @if(!$product->visible) checked @endif >
          <label class="form-check-label" for="falseV">False</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="visible" id="trueV" value="1"
          @if($product->visible) checked @endif >
          <label class="form-check-label" for="trueV">True</label>
        </div>
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="allow_comments" class="col-sm-2 col-form-label">Allow Comments</label>
    <div class="col-sm-6">
    
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="allow_comments" id="falseAC" value="0" 
        @if(!$product->allow_comments) checked @endif >
        <label class="form-check-label" for="falseAC">False</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="allow_comments" id="trueAC" value="1"
        @if($product->allow_comments) checked @endif >
        <label class="form-check-label" for="trueAC">True</label>
        </div>
    </div>
  </div>


  <div class="form-group row justify-content-md-center">
    <label for="tags" class="col-sm-2 col-form-label">Tags</label>
    <div class="col-sm-6">
      <input type="text" name="tags" class="form-control" id="tags"  value="{{$product->tags}}">
      <small>ex : PC,Accessoirs,Games</small>
    </div>
  </div>


  <div class="form-group row justify-content-md-center">
    <div class="col-sm-4">
      <button type="submit" class="btn btn-primary pt-0 pb-0"><i class="fas fa-pen"></i> {{$title}}</button>
      <button type="button"  class="btn btn-danger clickOnDelete pt-0 pb-0" ><i class="fas fa-trash"></i> Delete</button>
    </div>
  </div>
</form>


  <!-- remove record when onclick on delete above -->
  <form method="POST" style="display: none;" action="{{route('products.destroy',$product->id)}}">
    @csrf
    @method('delete')
    <button type="submit" id="confirm" class="btn btn-danger delete"></button>
  </form>



</div>  
   
  
@endsection