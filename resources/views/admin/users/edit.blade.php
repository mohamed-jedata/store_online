@extends('admin/includes/layout')

@php
 $title = "Edit user";
@endphp

@section('title',$title)

@section('content')

<div class="add-user">

<h1 >{{$title}}</h1>


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


<form method="POST" action="{{route('users.update',$user->id)}}" enctype="multipart/form-data">
@csrf 
@method('put')
  <div class="form-group row justify-content-md-center">
    <label for="fname" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-4">
      <input type="text" name="first_name" value="{{$user->first_name}}" class="form-control" id="fname">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="lname" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-4">
      <input type="text" name="last_name" value="{{$user->last_name}}" class="form-control" id="lname">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-4">
      <input type="email" name="email" value="{{$user->email}}" class="form-control" id="email">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="pass" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-4">
      <input type="password" name="password" class="form-control" id="pass" placeholder="Password Unchanged">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-4">
      <input type="tel" name="phone" value="{{$user->phone}}" class="form-control" id="phone">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="avatar" class="col-sm-2 col-form-label">Avatar</label>
    <div class="col-sm-4">
      <input type="file" name="avatar" accept="image/*" class="form-control btn btn-light" id="avatar">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="fname" class="col-sm-2 col-form-label">Admin</label>
    <div class="col-sm-4">
      @if($user->is_admin)
       <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="is_admin" id="false" value="0" >
          <label class="form-check-label" for="false">False</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="is_admin" id="true" value="1" checked>
          <label class="form-check-label" for="true">True</label>
        </div>
      @else
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="is_admin" id="false" value="0" checked>
          <label class="form-check-label" for="false">False</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="is_admin" id="true" value="1">
          <label class="form-check-label" for="true">True</label>
        </div>
      @endif
        
    
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
      <button type="submit" class="btn btn-primary"><i class="fas fa-pen"></i> {{$title}}</button>
      <button type="button"  class="btn btn-danger clickOnDelete"><i class="fas fa-trash"></i> Delete</button>
    </div>
  </div>
</form>


  <!-- remove record when onclick on delete above -->
  <form method="POST" style="display: none;" action="{{route('users.destroy',$user->id)}}">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger delete"><i class="fas fa-trash"></i> Delete</button>
  </form>


</div>  
   
  
@endsection