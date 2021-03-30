@extends('admin/includes/layout')

@php
 $title = "Edit Category";
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

  <form method="POST" action="{{route('categories.update',$category->id)}}" >
    @csrf
    @method('PUT')
    <div class="form-group row justify-content-md-center">
      <label for="fname" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-6">
        <input type="text" name="name" value="{{$category->name}}" class="form-control" id="fname">
      </div>
    </div>

    <div class="form-group row justify-content-md-center">
      <label for="description" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-6">
        <textarea type="text" name="description" rows="5"  class="form-control" id="description">{{$category->description}}</textarea>
      </div>
    </div>


    <div class="form-group row justify-content-md-center">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-6">
        <button type="submit" class="btn btn-primary"><i class="fas fa-pen"></i> Edit</button>
        <button type="button"  class="btn btn-danger clickOnDelete"><i class="fas fa-trash"></i> Delete</button>

      </div>
    </div>
  </form>

  <!-- remove record when onclick on delete above -->
  <form method="POST" style="display: none;" action="{{route('categories.destroy',$category->id)}}">
    @csrf
    @method('delete')
    <button type="submit"  id="confirm" class="btn btn-danger delete"><i class="fas fa-trash"></i> Delete</button>
  </form>

    


</div>


  
   
  
@endsection