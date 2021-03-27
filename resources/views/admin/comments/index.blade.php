@extends('admin/includes/layout')

@php
 $title = "Comments";
@endphp

@section('title',$title)

@section('content')

<div class="comments">

    <h1>{{$title}}</h1>

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
            <tr>
                <td>Mark</td>
                <td>Mark</td>
                <td>Mark</td>
                <td >
                    Otto
                </td>
                <td>
                    <a class="btn btn-success" href="{{route('comments.edit',1)}}">
                    <i class="fas fa-pen"></i> Edit
                    </a>
                </td>
            </tr>
            <tr>
                <td>Mark</td>
                <td>Mark</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>
                    <a class="btn btn-success" href="{{route('comments.edit',1)}}">
                    <i class="fas fa-pen"></i> Edit
                    </a>
                </td>
            </tr>
            <tr>
                <td>Mark</td>
                <td>Mark</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>
                    <a class="btn btn-success" href="{{route('comments.edit',1)}}">
                    <i class="fas fa-pen"></i> Edit
                    </a>
                </td>
            </tr>
        </tbody>
    </table>


</div>


  
   
  
@endsection