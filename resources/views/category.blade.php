@extends('includes/layout')

@section("title")


@section('content')


<div class="category">


    <div class="card">
        <!-- <div class="card-header">
            {{$category->name}}
            @if(count($products) > 0)
                <span class="float-right">
                    Trie Par Population
                </span>
            @endif
            
        </div> -->


        <div class="products" style="margin-top: -1px;">
            <h5 class="latest-product">{{$category->name}}</h5>	
             <ul class="w_nav" style="padding-top: 0px;">
					<li>Sort : </li>
			     	<li><a class="active" href="#">popular</a></li> |
			     	<li><a href="#">new </a></li> |
			     	<li><a href="#">discount</a></li> |
			     	<li><a href="#">price: Low High </a></li> 
			</ul>
        </div>


        <div class="card-body">

            <div class="row">
                

                @if(count($products) == 0)
                    <div class="empty" style="margin: auto;text-align:center">
                        <p>Il n'y a pas aucun produits dans ce catalogue</p>
                    </div>
                @else

                    @foreach($products as $product)
                        <div class="col-md-3">
                            <div class="card product">
                                <img src="{{asset('storage/uploads/products/'.$product->main_image)}}" class="card-img-top image" alt="">
                                <div class="card-body">
                                    <h4 class="card-title title">
                                        <a href="{{route('product-page',$product->id)}}">{{$product->name}} </a>
                                    </h4>
                                    <h5 class="price"> {{$product->price}}  $</h5>
                                    
                                    <!-- <div class="rate">
                                        @php $rate = 3 @endphp
                                        @if($rate >=0 && $rate <= 5)
                                            @for($i=1 ; $i <= $rate ; $i++)
                                            <i class="fa fa-star checked"></i>
                                            @endfor
                                            @for($i=1 ; $i <= 5 - $rate ; $i++)
                                            <i class="fa fa-star notChecked"></i>
                                            @endfor
                                        @endif
                                        <span class="views">({{$product->views}})</span>
                                    </div> -->
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                
                @endif
               

            </div>

        </div>
    </div>

    
</div>


@endsection