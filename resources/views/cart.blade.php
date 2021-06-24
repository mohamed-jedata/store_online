@extends('includes/layout')

@section("title")


@section('content')


<div class="spacingButtomTop cart-products">

       @if(count($products) > 0) 
        
        <h3 class="mb-5" style="color: #65696c;">
            @if(count($products) == 1)
                 Mon panier ({{count($products)}} element)
            @else
                Mon panier ({{count($products)}} elements)
            @endif
        </h3>

        @foreach($products as $product)
            
            <div class="product mb-1" >
                <form method="POST" action="{{route('cart.delete',$product->id)}}">
                    @csrf
                    @method("delete")
                    <span class="remove clickOnSubmit">
                        <i class="fas fa-trash"></i> SUPPRIMER
                    </span>
                    <input type="submit" class="submiting d-none">
                </form>
                <div class="media">
                    <img src="{{asset('storage/uploads/products/'.$product->main_image)}}"  class="pro-img" alt="...">
                    <div class="media-body">
                        <h4 class="product-title" style="font-size: 1.6em;">
                            <a href="#"> {{ $product->name }} </a>
                        </h4>
                        <h5 class="price">{{$product->price}} $ </h4>
                        <span class="country">Made in {{$product->country}}</span>
                        <form method="POST" style="margin-top: 10px;"
                            @csrf
                            <label for="quantite" style="font-weight: normal;"> Quantité</label>
                            <select name="quantite"  class="form-control" id="quantite">
                                    @for($i = 1; $i <= $product->stock ; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                            <input type="submit" class="submit d-none">
                        </form>
                    </div>
                </div>
            </div>


        @endforeach
        <div class="text-right buy-price">
            <form method="POST" action="{{ route('pay') }}">
                @csrf
                <input  type="text" value="{{$total}}" name="total_price" class="d-none">
            
                <span class="total-price" style="color: #000000;margin-top: 15px;">Prix Total : <b>{{$total}} $</b></span>
                <span class="buy-now"><button type="submit" class="btn btn-primary">Acheter Maintenant</button></span>
            </form>
        </div>


        @else
        <!-- No products -->


        <div class="container-fluid mt-100">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body mycart">
                    <div class="col-sm-12 empty-cart-cls text-center"> 
                        <i class="fas fa-shopping-cart fa-10x " style="color:#007bff;margin-bottom:10px"></i>
                        <h3 ><strong>Votre panier est Vide</strong></h3>
                        <h4 style="padding-top:10px;padding-bottom: 8px;">Decouvrir notre meilleurs categories et notre produits</h4> 
                        <a href="{{ route('index') }}" class="btn btn-primary" style="color: white;">Faire des Achats</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



        @endif

</div>


@endsection