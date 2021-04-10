@extends('admin/includes/layout')

@php
 $title = "Dashboard";
@endphp

@section('title',$title)

@include('admin/includes/util')

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
                            <a href="{{route('users.index')}}">{{$count_members}}</a>
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
                            <a href="{{route('products.index')}}">{{$count_products}}</a>
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
                            <a href="{{route('products.index')}}?disapproved">{{$count_pend_products}}</a>
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
                            <a href="{{route('comments.index')}}">{{$count_comments}}</a>
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
                        <i class="fas fa-tags i"></i> Lastest Products
                        </div>
                        <div class="card-body lastest last-products">
                            
                        @if(!empty($lastest_products) && $lastest_products->count() > 0)
                             <ul>
                            @foreach($lastest_products as $pro)
                               <li>
                                    {{ $pro->name}}
                                    <span class="float-right">
                                        <span class="price">
                                            {{ $pro->price}}
                                            {{ Util::CURRENCY}}
                                        </span>
                                        @if(!$pro->active)
                                        <a class="btn btn-primary" href="{{route('products.index')}}?action=approve&id={{$pro->id}}">
                                             Activate
                                        </a>
                                        @endif
                                        <a class="pl-2 text-success" href="{{route('products.edit',$pro->id)}}">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </span>
                                </li>
                            @endforeach
                            </ul>
                        @else
                             <div class="empty">
                                 There is not any Product
                             </div> 
                        @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                        <i class="fa fa-users i"></i> Lastest Users
                        </div>
                        <div class="card-body lastest last-users">
                        @if(!empty($lastest_users) && $lastest_users->count() > 0)
                            <ul>
                            @foreach($lastest_users as $user)
                               <li>  
                                   {{ $user->full_name}} 
                                    <span class="float-right">
                                        <a class="text-success" href="{{route('users.edit',$user->id)}}">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </span>
                                </li>
                            @endforeach
                            </ul>
                        @else
                             <div class="empty">
                                 There is not any Users
                             </div> 
                        @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                        <i class="fa fa-comments i"></i> Lastest Comments
                        </div>
                        <div class="card-body lastest last-comments">
                        @if(!empty($lastest_comments) && $lastest_comments->count() > 0)
                            <ul>
                            @foreach($lastest_comments as $comm)
                              <li> 
                                  <label>{{ $comm->user->first_name .' '.$comm->user->last_name}} </label> :
                                 {{ $comm->comment}} 
                                 <span class="float-right">
                                 <a class="text-success" href="{{route('comments.edit',$comm->id)}}">
                                    <i class="fas fa-pen"></i>
                                 </a>
                                </span>
                             </li>
                            @endforeach
                            </ul>
                        @else
                            <div class="empty">
                                 There is not any Comments
                             </div> 
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>


</div>     
  
@endsection