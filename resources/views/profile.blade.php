@extends('includes/layout')

@section("title")


@section('content')

<div class="profile">

        <div class="inform">
            <div class="card">
                <div class="card-header">
                    Mes Informations Personnels
                </div>
                <div class="card-body">

                    <ul>
                        <li><span>Nom</span>: Jedata</li>
                        <li><span>Prenom</span>: +210 000 125</li>
                        <li><span>Email Address</span>: mohamedjedata@gmail.com</li>
                        <li><span>Addresse</span>: Morrocco Marrakech</li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="prod">
            <div class="card">
                <div class="card-header">
                    Mes Produits
                </div>
                <div class="card-body">

                    <!-- <div class="text-center">
                        Vous n'avez pas aucun vendu aucun produits ,
                        <a href="#">Ajouter un produit </a>
                    </div> -->


                    <div class="row">
                

                        @for($k=0 ; $k < 7 ;$k++)
                            <div class="col-md-3">
                                <div class="card product">
                                    <img src="{{asset('img/mac.jpeg')}}" class="card-img-top image" alt="">

                                    <a class="btn btn-success edit" href="#">Modifier</a>
                                    <span class="wait-approv">En Attende d'approuval</span>
                                    <div class="card-body">
                                        <h4 class="card-title title">
                                            Mac Laptop V470 
                                        </h4>
                                        <h5 class="price"> 870 000 $</h5>
                                        
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
                                            <span class="views">(88)</span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        @endfor

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

                    <ul>
                        <li>Thank you very much I like your products <span class="date">20-10-2000</span></li>
                        <li>Nice Produts <span class="date">30-10-1999</span></li>
                        <li>I love delivery <span class="date">18-08-2012</span></li>
                    </ul>

                </div>
            </div>
        </div>
        

</div>

@endsection