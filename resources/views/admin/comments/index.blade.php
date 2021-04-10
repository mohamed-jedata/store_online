@extends('admin/includes/layout')

@php
 $title = "Comments";
@endphp

@section('title',$title)

@section('content')

<div class="comments">

    <h1>{{$title}}</h1>


    @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
    @endif

    <table class="table">
        <thead class="thead-light text-center">
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Product Name</th>
                <th scope="col" style="width: 50%;">Comment</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody class="text-center">
        @foreach($comments as $comm)
            <tr>
                <td>{{$comm->user->first_name .' '.$comm->user->last_name}}</td>
                <td>{{$comm->user->email}}</td>
                <td>{{$comm->product->name}}</td>
                <td >
                    {{$comm->comment}}
                </td>
                <td>
                    <a class="btn btn-success" href="{{route('comments.edit',$comm->id)}}">
                    <i class="fas fa-pen"></i> Edit
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $comments->links() }}


</div>


  
   
  
@endsection