@extends('admin/includes/layout')

@php
 $title = "Edit Product";
@endphp

@section('title',$title)

@section('content')

<div class="add-pro">

<h1>{{$title}}</h1>


<form method="POST" action="{{route('products.update',1)}}" >
    @csrf

    <div class="form-group row justify-content-md-center">
    <label for="name" class="col-sm-2 col-form-label">Product Name</label>
    <div class="col-sm-4">
      <input type="text" name="name" class="form-control" id="name">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="price" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-4">
      <input type="text" name="price" class="form-control" id="price">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="price" class="col-sm-2 col-form-label">Country</label>
    <div class="col-sm-4">
      <input type="text" name="price" class="form-control" id="price">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="cat_id" class="col-sm-2 col-form-label">Categroy</label>
    <div class="col-sm-4">
      <select name="cat_id" class="form-control" id="cat_id">
        <option id="1">Categroy1</option>
        <option id="2">Categroy2</option>
      </select>
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-4">
      <textarea type="text" name="description" class="form-control" id="description"></textarea>
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="main_image" class="col-sm-2 col-form-label">Main Image</label>
    <div class="col-sm-4">
      <input type="file" name="main_image" class="form-control btn btn-light" id="main_image">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="images" class="col-sm-2 col-form-label">Other Images</label>
    <div class="col-sm-4">
      <input type="file" name="images[]" multiple class="form-control btn btn-light" id="images">
    </div>
  </div>


  <div class="form-group row justify-content-md-center">
    <label for="visible" class="col-sm-2 col-form-label">Visible</label>
    <div class="col-sm-4">
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="visible" id="falseV" value="0" checked>
        <label class="form-check-label" for="falseV">False</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="visible" id="trueV" value="1">
        <label class="form-check-label" for="trueV">True</label>
        </div>
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="allow_comments" class="col-sm-2 col-form-label">Allow Comments</label>
    <div class="col-sm-4">
    
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="allow_comments" id="falseAC" value="0" checked>
        <label class="form-check-label" for="falseAC">False</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="allow_comments" id="trueAC" value="1">
        <label class="form-check-label" for="trueAC">True</label>
        </div>
    </div>
  </div>


  <div class="form-group row justify-content-md-center">
    <label for="tags" class="col-sm-2 col-form-label">Tags</label>
    <div class="col-sm-4">
      <input type="text" name="tags" class="form-control" id="tags">
      <small>ex : PC,Accessoirs,Games</small>
    </div>
  </div>


  <div class="form-group row justify-content-md-center">
    <div class="col-sm-2">
      <button type="submit" class="btn btn-primary pt-0 pb-0"><i class="fas fa-pen"></i> {{$title}}</button>
    </div>
  </div>
</form>




</div>  
   
  
@endsection