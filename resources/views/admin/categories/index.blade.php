@extends('admin/includes/layout')

@php
 $title = "Categories";
@endphp

@section('title',$title)

@section('content')

<div class="categories">

<h1>{{$title}}</h1>


  @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif


<div class="card">
  <div class="card-header">
    Categries
  </div>
  @foreach($categories as $cat)
  <div class="card-body show-edit">
    <h5 class="card-title">
     {{ $cat->name }}
      <a class="btn btn-success float-right" href="{{route('categories.edit',$cat->id)}}">
          <i class="fas fa-pen"></i> Edit
      </a>
    </h5>
    <p class="card-text">
        {{ $cat->description }}
    </p>
  </div>
  <hr>
  @endforeach

</div>

{{ $categories->links() }}


<a class="btn_mine" href="{{route('categories.create')}}"><i class="fas fa-plus"></i> Add new Category</a>


</div>  
   
  
@endsection