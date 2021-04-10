@extends('admin/includes/layout')

@php
 $title = "Products";
@endphp

@include('admin/includes/util')

@section('title',$title)

@section('content')

<div class="products">

    <h1>{{$title}}</h1>


    @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
    @endif

   
    <div class="card">

        <div class="card-header">
                <i class="fas fa-tags"></i> {{$title}}
        </div>

        @foreach($products as $product)

        <div class="media">
            <img src="{{asset('storage/uploads/products/'.$product->main_image)}}"  class="pro-img" alt="...">
            <div class="media-body show-edit product">
                    <h5 class="product-title">
                        {{$product->name}}
                        @if(!$product->active)
                        <a class="btn btn-warning float-right" href="?action=approve&id={{$product->id}}">
                            <i class="fas fa-pen"></i> Approve
                        </a>
                        @endif
                        <a class="btn btn-success float-right" href="{{route('products.edit',$product->id)}}">
                            <i class="fas fa-pen"></i> Edit
                        </a>
                    </h5>
                    <h5 class="price">{{$product->price}} {{ Util::CURRENCY }} </h4>
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
                    @if(!empty(trim($product->images)))
                        @php $images = explode('|',$product->images) @endphp
                        <div class="images">
                            <img src="{{asset('storage/uploads/products/'.$product->main_image)}}" width="40" height="40">
                            @foreach($images as $img)
                                <img src="{{asset('storage/uploads/products/'.$img)}}" width="40" height="40">
                            @endforeach 
                        </div>
                    @endif

                    @if(!$product->visible || !$product->allow_comments || !$product->active)
                    <div class="notifications">
                        @if(!$product->visible) <span class="badge badge-primary">Invisible</span> @endif
                        @if(!$product->allow_comments) <span class="badge badge-warning">No Comments Allowed</span> @endif
                        @if(!$product->active) <span class="badge badge-danger">Disapproved</span> @endif       
                    </div>
                    @endif

            </div>
        </div>

        <hr>  


        @endforeach
    </div>

    {{ $products->links() }}     
 
  
    <a class="btn_mine" href="{{route('products.create')}}"><i class="fas fa-plus"></i> Add new Product</a>


</div>  
   
  
@endsection