@extends('includes/layout')

@section("title")


@section('content')


<div class="spacingButtomTop cart-products">

       @if(count($products) > 0) 
        <h3 class="mb-5" style="color: #65696c;">
            @if(count($products) == 1)
                 Mon panier ({{count($products)}} produit)
            @else
                Mon panier ({{count($products)}} produits)
            @endif
        </h3>




        @foreach($products as $product)
            
            <div class="product mb-1" >
                <a href="#"  class="remove">
                    <i class="fas fa-trash"></i> SUPPRIMER
                </a>
                <div class="media">
                    <img src="{{asset('img/profile.png')}}"  class="pro-img" alt="...">
                    <div class="media-body">
                        <h4 class="product-title">
                            <a href="#">Mac Book VV2</a>
                        </h4>
                        <h5 class="price">888 000 $ </h4>
                        <span class="country">Made in Morrocco</span>
                        <form method="POST" class="mt-2">
                            <label for="quantite" class="">Quantité</label>
                            <select name="quantite"  class="form-control" id="quantite">
                                    <option value="2">1</option>
                                    <option value="3">2</option>
                                    <option value="4">3</option>
                                    <option value="5">4</option>
                                    <option value="8">5</option>
                            </select>
                            <input type="submit" class="submit d-none">
                        </form>
                    </div>
                </div>
            </div>


        @endforeach
        <div class="text-right buy-price">
            <span class="mt-5 total-price" style="color: #000000;">Prix Total : <b>180 000 $</b></span>
            <span class="buy-now"><a href="#" class="btn btn-primary">Achter Maintenant</a></span>
        </div>

        @endif

</div>


@endsection