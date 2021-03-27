@extends('admin/includes/layout')

@php
 $title = "Add Categorie";
@endphp

@section('title',$title)

@section('content')

<div class="categories">

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

<form method="POST" action="{{route('categories.store')}}" >
@csrf
  <div class="form-group row justify-content-md-center">
    <label for="fname" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-4">
      <input type="text" name="name" class="form-control" id="fname">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="lname" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-4">
      <textarea type="text" name="description" rows="4" class="form-control" id="lname"></textarea>
    </div>
  </div>


  <div class="form-group row justify-content-md-center">
    <div class="col-sm-2">
      <button type="submit" class="btn btn-primary pt-0 pb-0"><i class="fas fa-plus"></i> {{$title}}</button>
    </div>
  </div>
</form>




</div>  
   
  
@endsection