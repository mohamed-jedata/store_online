@extends('includes/layout')

@section("title")


@section('content')


<div class="product-info spacingButtomTop">

        <div class="product">

            <div class="row">

                <div class="col-md-4">

                    @if(count($images) == 0)
                        <img src="{{asset('storage/uploads/products/'.$product->main_image)}}"  class="image"  alt="..."> 
                    @else
                        <div style="height: 100%;" id="carsouselControll" class="carousel slide" data-ride="carousel">
                            <div style="height: 100%;" class="carousel-inner">

                                <div style="height: 100%;" class="carousel-item active">
                                    <img src="{{asset('storage/uploads/products/'.$product->main_image)}}" class="image">
                                </div>
                                @foreach($images as $img)
                                <div style="height: 100%;" class="carousel-item">
                                    <img src="{{asset('storage/uploads/products/'.$img)}}" class="image">
                                </div>
                                @endforeach
                                <div  class="carousel-control-prev text-dark" href="#carsouselControll" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </div>
                                <div  class="carousel-control-next" href="#carsouselControll" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span></div>
                                </div>
                        </div>
                    @endif
                   
                 
                </div>
            
                <div class="col-md-8">
                    <div class="details ml-md-n3">
                            <ul>
                                <li class="title">  {{$product->name }}  </li>
                                <li class="tags">
                                    Tags : 
                                    @foreach($tags as $tag)
                                        <a href="#">{{$tag}}</a>
                                    @endforeach
                                </li>
                                <li>
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
                                </li>
                                <li> <hr> </li>
                                <li class="price">{{$product->price}} $</li>
                                <li class="country">Made in {{$product->country}}</li>
                                <li class="add-cart">
                                    <form action="{{route('cart.create')}}" method="post">
                                        @csrf
                                        <input class="d-none" name="product_id" value="{{$product->id }}"> 
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-cart-plus"></i> Ajouter au cart
                                        </button>
                                    </form>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>

        </div>


        <div class="description">
            <div class="card">
                <div class="card-header">
                    Details
                </div>
                <div class="card-body">

                    <p>
                         {{$product->description}}
                    </p>

                </div>
            </div>
        </div>
        
        <div class="comments">
            <div class="card">
                <div class="card-header">
                    Commentaires
                </div>
                <div class="card-body">
                    <!-- Case Comment are disabled -->
                    <!-- <div class="text-center mb-2"> -->
                          <!-- Comments are not Allowed for this Product -->
                          <!-- Pour Faire une Comment , Vous devez <a href="#"> Authentifier </a> -->

                    <!--</div>-->
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-sm-12">
                                 <textarea type="text" name="comment" rows="3" class="form-control" placeholder="Saisez Votre commentaire ici"></textarea>
                            </div>
  
                        </div>
                        <div class="row mt-2 mb-4">
                            <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary">Comment</button>
                            </div>
                        </div>
                    </form>

                    @if(count($comments) > 0)
                        @foreach($comments as $comment)
                        <div class="media comment">
                            @php 
                            $avatar = empty(trim($comment->user->avatar))
                                ? 'img/profile.png'
                                : 'storage/uploads/avatars/'.$comment->user->avatar ;
                            @endphp
                            <img src="{{asset($avatar)}}" class="mr-3" srcset="">
                            <div class="media-body pt-1" >
                                <h6 class="username">
                                {{$comment->user->first_name.' '.$comment->user->last_name}}
                                </h6>
                                <p>   
                                    {{$comment->comment}}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="empty" style="margin: auto;">
                            <p>Il n'y a pas aucun commentaires dans ce produit</p>
                        </div>
                    @endif

                    
            </div>
        </div>

                    
                </div>
            </div>
        </div>
        

</div>
  



@endsection