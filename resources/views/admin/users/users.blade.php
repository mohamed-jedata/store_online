@extends('admin/includes/layout')

@php
 $title = "Users";
@endphp

@section('title',$title)


@section('content')

<div class="users">

<h1>{{$title}}</h1>

  @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif


<table class="table">
  <thead class="thead-light text-center">
    <tr>
      <th scope="col">Avatar</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody class="text-center">
  @foreach($users as $user)
      
    <tr>
      <td class="col-avatar"> 
          @if(!empty(trim($user->avatar)))
            <img src="{{asset($user->avatar)}}">
         @else
            <img src="{{asset('img/profile.png')}}">
         @endif
      </td>
      <td>{{$user->first_name ." ". $user->last_name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->phone}}</td>
      <td>
          <a class="btn btn-success" href="{{route('users.edit',$user->id)}}">
          <i class="fas fa-pen"></i> Edit
          </a>
      </td>
    </tr>

  @endforeach
  
  </tbody>
</table>

{{ $users->links() }}

<a class="btn_mine" href="{{route('users.create')}}"><i class="fas fa-plus"></i> Add new User</a>


</div>  
   
  
@endsection