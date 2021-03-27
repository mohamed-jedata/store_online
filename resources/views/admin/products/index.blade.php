@extends('admin/includes/layout')

@php
 $title = "Products";
@endphp

@section('title',$title)

@section('content')

<div class="products">

    <h1>{{$title}}</h1>

   
            <div class="card">

                    <div class="card-header">
                         <i class="fas fa-tags"></i> {{$title}}
                    </div>

                    <div class="media">
                        <img src="{{asset('img/mac.jpeg')}}" width="180" height="150" class="mr-3 pro-img" alt="...">
                        <div class="media-body show-edit product">
                                <h5 class="product-title">
                                    Mac Apple PC
                                    <a class="btn btn-success float-right" href="{{route('products.edit',1)}}">
                                        <i class="fas fa-pen"></i> Edit
                                    </a>
                                </h5>
                                <h5 class="price">280 000 $ </h4>
                                <div class="rate">
                                    @php $rate = 3 @endphp
                                    @if($rate >=0 && $rate <= 5)
                                        @for($i=1 ; $i <= $rate ; $i++)
                                        <i class="fa fa-star checked"></i>
                                        @endfor
                                        @for($i=1 ; $i <= 5 - $rate ; $i++)
                                        <i class="fa fa-star notChecked"></i>
                                        @endfor
                                    @endif
                                </div>
                                <div class="images">
                                    <img src="{{asset('img/mac.jpeg')}}" width="40" height="40">
                                    <img src="{{asset('storage/uploads/avatars/03252021200848605cedd09a360.png')}}" width="40" height="40">
                                    <img src="{{asset('storage/uploads/avatars/03252021191619605ce183c7663.png')}}" width="40" height="40">
                                    <img src="{{asset('storage/uploads/avatars/03262021155529605e03f11830e.png')}}" width="40" height="40">
                                </div>
                        </div>
                    </div>

                    <hr>


                    

            </div>

           
 
  
    <a class="btn_mine" href="{{route('products.create')}}"><i class="fas fa-plus"></i> Add new Product</a>


</div>  
   
  
@endsection