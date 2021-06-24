@extends('includes/layout')

@section("title")


@section('content')

<div class="profile">


        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif


        <div class="inform">
            <div class="card">
                <div class="card-header">
                    Mes Informations Personnels
                </div>
                <div class="card-body">

                    <ul>
                        <li><span>Nom</span>: {{ $user->last_name }}</li>
                        <li><span>Prenom</span>: {{ $user->first_name }}</li>
                        <li><span>Email Address</span>: {{ $user->email }}</li>
                        <li><span>Addresse</span>: {{ $user->address }}</li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="prod" id="my_products">
            <div class="card">
                <div class="card-header">
                    Mes Produits<span class="float-right"><a href="{{route('create_product')}}">Ajouter un produit</a></span>
                </div>
                <div class="card-body">

                    <!-- <div class="text-center">
                        Vous n'avez pas aucun vendu aucun produits ,
                        <a href="#">Ajouter un produit </a>
                    </div> -->


                    <div class="row">
                
                        @if(count($products))
                            @foreach($products as $pro)
                            <div class="col-md-3">
                                <div class="card product">
                                    <img src="{{asset('storage/uploads/products/'.$pro->main_image)}}" class="card-img-top image" alt="">

                                    <a class="btn btn-success edit" href="{{route('edit_product',$pro->id)}}">Modifier</a>
                                    @if($pro->active == 0)
                                       <span class="wait-approv">En Attende d'approuval</span>
                                    @endif
                                    <div class="card-body">
                                        <h4 class="card-title title">
                                        <a href="{{route('product-page',$pro->id)}}">{{$pro->name}} </a>
                                        </h4>
                                        <h5 class="price" style="font-size: 21px;color: gray;"> {{$pro->price}} $</h5>
                                        
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
                                            <span class="views">(88)</span>
                                        </div> -->
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <div class="empty text-center">
                                Vous n'avez pas aucun produits , 
                                <a href="{{route('create_product')}}">Ajouter un produit</a>
                            </div>
                        @endif
                    </div>


                    

                </div>
            </div>
        </div>
        
        <!-- <div class="commandes">
            <div class="card">
                <div class="card-header">
                    Mes Commandes
                </div>
                <div class="card-body">

                    <div class="text-center">
                        Vous n'avez pas aucun commandes ,
                       <a href="#"> Faire des commandes maintenant</a>
                    </div>

                   

                </div>
            </div>
        </div> -->
        
        <div class="comments">
            <div class="card">
                <div class="card-header">
                    Mes Commentaires
                </div>
                <div class="card-body">

                    <!-- <div class="text-center">
                        Vous n'avez pas aucun commentaires
                    </div> -->
                    @if(count($comments))
                        <ul>
                        @foreach($comments as $comm)
                            <li>{{$comm->comment}} <span class="date">{{$comm->created_at}}</span></li>
                        @endforeach
                        </ul>
                    @else
                        <div class="empty text-center">
                            Vous n'avez pas aucun Commentaires
                        </div>
                    @endif
                   

                </div>
            </div>
        </div>
        

</div>

@endsection