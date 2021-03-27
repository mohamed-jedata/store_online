@extends('admin/includes/layout')

@php
 $title = "Dashboard";
@endphp

@section('title',$title)


@section('content')

<div class="dashboard">

    <h1>{{$title}}</h1>

    <div class="row statiques">
            <div class="col-md-6 col-lg-3">
                <div class="stat st-members">
                    <i class="fa fa-users i"></i>
                    <div class="info">
                        Total Members
                        <span>
                            <a href="{{route('users.index')}}">12</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat st-products">
                    <i class="fas fa-tags i"></i>
                    <div class="info">
                        Total Products
                        <span>
                            <a href="{{route('products.index')}}">880</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat st-pending">
                    <i class="fas fa-tag i"></i>
                    <div class="info">
                        Pending Products
                        <span>
                            <a href="{{route('products.index')}}">880</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat st-comments">
                    <i class="fa fa-comments i"></i>
                    <div class="info">
                        Total Comments
                        <span>
                            <a href="{{route('comments.index')}}">800</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <div class="cards">

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Lastest Products
                        </div>
                        <div class="card-body">
                        
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                        <i class="fa fa-users i"></i> Lastest Users
                        </div>
                        <div class="card-body">
                        
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                        <i class="fa fa-comments i"></i> Lastest Comments
                        </div>
                        <div class="card-body">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


</div>     
  
@endsection