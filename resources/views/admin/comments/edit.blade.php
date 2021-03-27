@extends('admin/includes/layout')

@php
 $title = "Edit Comment";
@endphp

@section('title',$title)

@section('content')

<div class="comments">

    <h1>{{$title}}</h1>

    
<form method="POST" action="{{route('comments.update',1)}}" >
  <div class="form-group row justify-content-md-center">
    <label for="fname" class="col-sm-2 col-form-label" > Product Name</label>
    <div class="col-sm-4">
      <input type="text" name="name" class="form-control" id="pro_name" readonly> 
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="fname" class="col-sm-2 col-form-label"> Email</label>
    <div class="col-sm-4">
      <input type="email" name="name" class="form-control" id="email" readonly>
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="full_name" class="col-sm-2 col-form-label"> Full Name</label>
    <div class="col-sm-4">
      <input type="email" name="full_name" class="form-control" id="full_name" readonly>
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="comment" class="col-sm-2 col-form-label">Comment</label>
    <div class="col-sm-4">
      <textarea type="text" name="comment" class="form-control" id="comment"></textarea>
    </div>
  </div>


  <div class="form-group row justify-content-md-center">
    <div class="col-sm-2">
      <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> {{$title}}</button>
    </div>
  </div>
</form>

    


</div>


  
   
  
@endsection