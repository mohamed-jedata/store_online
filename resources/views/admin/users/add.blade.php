@extends('admin/includes/layout')



@section('content')

<div class="add-user">

<h1 >Add New User</h1>

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


<form method="POST" action="{{route('users.store')}}"  enctype="multipart/form-data">
@csrf
  <div class="form-group row justify-content-md-center">
    <label for="fname" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-4">
      <input type="text" name="first_name" class="form-control" id="fname">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="lname" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-4">
      <input type="text" name="last_name" class="form-control" id="lname">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-4">
      <input type="email" name="email" class="form-control" id="email">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="pass" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-4">
      <input type="password" name="password" class="form-control" id="pass">
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-4">
      <input type="tel" name="phone" class="form-control" id="phone">
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
    
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="is_admin" id="false" value="0" checked>
        <label class="form-check-label" for="false">False</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="is_admin" id="true" value="1">
        <label class="form-check-label" for="true">True</label>
        </div>
        
    
    </div>
  </div>

  <div class="form-group row justify-content-md-center">
    <div class="col-sm-2">
      <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Add User</button>
    </div>
  </div>
</form>



</div>  
   
  
@endsection