<!DOCTYPE html>
<html>
<head>
<title>Big shope</title>
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{--asset('css/bootstrap.min.css')--}}">
<!--theme-style-->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />	
<link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{asset('js/fontawesome.min.js')}}"></script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.wmuSlider.js')}}"></script> 
<!--script-->
</head>
<body> 


@include('includes/navbar')

    
	<div class="container">
			<div class="shoes-grid">
                    
                    <div class="wmuSlider example1 slide-grid">		 
                        <div class="wmuSliderWrapper">	
                        @if(count($products_3) > 0)	  
                          @foreach($products_3 as $pro)
                            <article >					
                                <div class="banner-matter">
                                <div class="col-md-5 banner-bag">
                                    <a href="{{ route('product-page',$pro->id) }}">
                                    <img class="img-responsive " src="{{asset('img/bag.jpg')}}" alt=" " /></a>
                                    </div>
                                    <div class="col-md-7 banner-off">							
                                        <a href="{{ route('product-page',$pro->id) }}"><h2 style="margin-bottom: 10px;">{{ $pro->name }}</h2></a>
                                        <!-- <label>FOR ALL PURCHASE <b>VALUE</b></label> -->
                                        <p>{{ $pro->description }}</p>					
                                        <span class="on-get"><a href="{{ route('product-page',$pro->id) }}">GET NOW</a></span>
                                    </div>
                                    
                                    <div class="clearfix"> </div>
                                    </div>
                            </article>
                          @endforeach
                        @endif  
                        </div>
                        <script>
                            $('.example1').wmuSlider();         
                        </script> 
                    </div>
                   

                   
                    <!-- <div class="shoes-grid-left">
                        <a href="single.html">				 
                            <div class="col-md-6 con-sed-grid">
                                <div class=" elit-grid"> 
                                    <h4 style="padding-bottom: 10px;">Router Cisco 2012</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                                    <span class="on-get">GET NOW</span>						
                                </div>						
                                <img class="img-responsive shoe-left" src="{{asset('img/sh.jpg')}}" alt=" " />
                                <div class="clearfix"> </div>
                            </div>
                        </a>
                        <a href="single.html">	
                            <div class="col-md-6 con-sed-grid sed-left-top">
                                <div class=" elit-grid"> 
                                    <h4  style="padding-bottom: 10px;">consectetur  elit</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                                    <span class="on-get">GET NOW</span>
                                </div>		
                                <img class="img-responsive shoe-left" src="{{asset('img/wa.jpg')}}" alt=" " />
                                <div class="clearfix"> </div>
                            </div>
                        </a>
                    </div> -->





                    <div class="products">
                        <h5 class="latest-product">LATEST PRODUCTS </h5>	
                        <a class="view-all" href="product.html">VIEW ALL <i style="margin-left: 6px;" class="fas fa-chevron-right"></i><span> </span></a> 		     
                    </div>
                    <div class="product-left">
                        <div class="col-md-4 chain-grid">
                            <a href="single.html"><img class="img-responsive chain" src="{{asset('img/ch.jpg')}}" alt=" " /></a>
                            <span class="star"> </span>
                            <div class="grid-chain-bottom">
                                <h6><a href="single.html">Lorem ipsum dolor</a></h6>
                                <div class="star-price">
                                    <div class="dolor-grid"> 
                                        <span class="actual">300$</span>
                                        <span class="rating">
                                                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                                                <label for="rating-input-1-5" class="rating-star1"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                                                <label for="rating-input-1-4" class="rating-star1"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                                                <label for="rating-input-1-3" class="rating-star"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                                                <label for="rating-input-1-2" class="rating-star"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                                                <label for="rating-input-1-1" class="rating-star"> </label>
                                        </span>
                                    </div>
                                    <a class="now-get get-cart" href="#">ADD TO CART</a> 
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 chain-grid">
                            <a href="single.html"><img class="img-responsive chain" src="{{asset('img/ba.jpg')}}" alt=" " /></a>
                            <span class="star"> </span>
                            <div class="grid-chain-bottom">
                                <h6><a href="single.html">Lorem ipsum ddolor</a></h6>
                                <div class="star-price">
                                    <div class="dolor-grid"> 
                                        <span class="actual">300$</span>
                                        <span class="reducedfrom">400$</span>
                                        <span class="rating">
                                                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                                                <label for="rating-input-1-5" class="rating-star1"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                                                <label for="rating-input-1-4" class="rating-star1"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                                                <label for="rating-input-1-3" class="rating-star"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                                                <label for="rating-input-1-2" class="rating-star"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                                                <label for="rating-input-1-1" class="rating-star"> </label>
                                        </span>
                                    </div>
                                    <a class="now-get get-cart" href="#">ADD TO CART</a> 
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 chain-grid grid-top-chain">
                            <a href="single.html"><img class="img-responsive chain" src="{{asset('img/bo.jpg')}}" alt=" " /></a>
                            <span class="star"> </span>
                            <div class="grid-chain-bottom">
                                <h6><a href="single.html">Lorem ipsum dolor</a></h6>
                                <div class="star-price">
                                    <div class="dolor-grid"> 
                                        <span class="actual">300$</span>
                                        <span class="reducedfrom">400$</span>
                                        <span class="rating">
                                                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                                                <label for="rating-input-1-5" class="rating-star1"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                                                <label for="rating-input-1-4" class="rating-star1"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                                                <label for="rating-input-1-3" class="rating-star"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                                                <label for="rating-input-1-2" class="rating-star"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                                                <label for="rating-input-1-1" class="rating-star"> </label>
                                        </span>
                                    </div>
                                    <a class="now-get get-cart" href="#">ADD TO CART</a> 
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>


                    <div class="products">
                        <h5 class="latest-product">POPULAR PRODUCTS </h5>	
                        <a class="view-all" href="product.html">VIEW ALL <i style="margin-left: 6px;" class="fas fa-chevron-right"></i><span> </span></a> 		     
                    </div>
                    <div class="product-left">
                        <div class="col-md-4 chain-grid">
                            <a href="single.html"><img class="img-responsive chain" src="{{asset('img/ch.jpg')}}" alt=" " /></a>
                            <span class="star"> </span>
                            <div class="grid-chain-bottom">
                                <h6><a href="single.html">Lorem ipsum dolor</a></h6>
                                <div class="star-price">
                                    <div class="dolor-grid"> 
                                        <span class="actual">300$</span>
                                        <span class="rating">
                                                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                                                <label for="rating-input-1-5" class="rating-star1"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                                                <label for="rating-input-1-4" class="rating-star1"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                                                <label for="rating-input-1-3" class="rating-star"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                                                <label for="rating-input-1-2" class="rating-star"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                                                <label for="rating-input-1-1" class="rating-star"> </label>
                                        </span>
                                    </div>
                                    <a class="now-get get-cart" href="#">ADD TO CART</a> 
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 chain-grid">
                            <a href="single.html"><img class="img-responsive chain" src="{{asset('img/ba.jpg')}}" alt=" " /></a>
                            <span class="star"> </span>
                            <div class="grid-chain-bottom">
                                <h6><a href="single.html">Lorem ipsum ddolor</a></h6>
                                <div class="star-price">
                                    <div class="dolor-grid"> 
                                        <span class="actual">300$</span>
                                        <span class="reducedfrom">400$</span>
                                        <span class="rating">
                                                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                                                <label for="rating-input-1-5" class="rating-star1"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                                                <label for="rating-input-1-4" class="rating-star1"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                                                <label for="rating-input-1-3" class="rating-star"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                                                <label for="rating-input-1-2" class="rating-star"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                                                <label for="rating-input-1-1" class="rating-star"> </label>
                                        </span>
                                    </div>
                                    <a class="now-get get-cart" href="#">ADD TO CART</a> 
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 chain-grid grid-top-chain">
                            <a href="single.html"><img class="img-responsive chain" src="{{asset('img/bo.jpg')}}" alt=" " /></a>
                            <span class="star"> </span>
                            <div class="grid-chain-bottom">
                                <h6><a href="single.html">Lorem ipsum dolor</a></h6>
                                <div class="star-price">
                                    <div class="dolor-grid"> 
                                        <span class="actual">300$</span>
                                        <span class="reducedfrom">400$</span>
                                        <span class="rating">
                                                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                                                <label for="rating-input-1-5" class="rating-star1"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                                                <label for="rating-input-1-4" class="rating-star1"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                                                <label for="rating-input-1-3" class="rating-star"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                                                <label for="rating-input-1-2" class="rating-star"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                                                <label for="rating-input-1-1" class="rating-star"> </label>
                                        </span>
                                    </div>
                                    <a class="now-get get-cart" href="#">ADD TO CART</a> 
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <!-- <div class="products">
                        <h5 class="latest-product">LATEST PRODUCTS</h5>	
                        <a class="view-all" href="product.html">VIEW ALL <span> </span></a> 		     
                    </div>
                    <div class="product-left">
                        <div class="col-md-4 chain-grid">
                            <a href="single.html"><img class="img-responsive chain" src="{{asset('img/bott.jpg')}}" alt=" " /></a>
                            <span class="star"> </span>
                            <div class="grid-chain-bottom">
                                <h6><a href="single.html">Lorem ipsum dolor</a></h6>
                                <div class="star-price">
                                    <div class="dolor-grid"> 
                                        <span class="actual">300$</span>
                                        <span class="reducedfrom">400$</span>
                                        <span class="rating">
                                                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                                                <label for="rating-input-1-5" class="rating-star1"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                                                <label for="rating-input-1-4" class="rating-star1"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                                                <label for="rating-input-1-3" class="rating-star"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                                                <label for="rating-input-1-2" class="rating-star"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                                                <label for="rating-input-1-1" class="rating-star"> </label>
                                        </span>
                                    </div>
                                    <a class="now-get get-cart" href="#">ADD TO CART</a> 
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 chain-grid">
                            <a href="single.html"><img class="img-responsive chain" src="{{asset('img/bottle.jpg')}}" alt=" " /></a>
                            <span class="star"> </span>
                            <div class="grid-chain-bottom">
                                <h6><a href="single.html">Lorem ipsum dolor</a></h6>
                                <div class="star-price">
                                    <div class="dolor-grid"> 
                                        <span class="actual">300$</span>
                                        <span class="reducedfrom">400$</span>
                                        <span class="rating">
                                                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                                                <label for="rating-input-1-5" class="rating-star1"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                                                <label for="rating-input-1-4" class="rating-star1"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                                                <label for="rating-input-1-3" class="rating-star"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                                                <label for="rating-input-1-2" class="rating-star"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                                                <label for="rating-input-1-1" class="rating-star"> </label>
                                        </span>
                                    </div>
                                    <a class="now-get get-cart" href="#">ADD TO CART</a> 
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 chain-grid grid-top-chain">
                            <a href="single.html"><img class="img-responsive chain" src="{{asset('img/baa.jpg')}}" alt=" " /></a>
                            <span class="star"> </span>
                            <div class="grid-chain-bottom">
                                <h6><a href="single.html">Lorem ipsum dolor</a></h6>
                                <div class="star-price">
                                    <div class="dolor-grid"> 
                                        <span class="actual">300$</span>
                                        <span class="reducedfrom">400$</span>
                                        <span class="rating">
                                                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                                                <label for="rating-input-1-5" class="rating-star1"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                                                <label for="rating-input-1-4" class="rating-star1"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                                                <label for="rating-input-1-3" class="rating-star"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                                                <label for="rating-input-1-2" class="rating-star"> </label>
                                                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                                                <label for="rating-input-1-1" class="rating-star"> </label>
                                        </span>
                                    </div>
                                    <a class="now-get get-cart" href="#">ADD TO CART</a> 
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div> -->


                    <div class="clearfix"> </div>
	   	    </div>  

               
                @if(count($categories) > 0)
			   <div class="sub-cate">
				<div class=" top-nav rsidebar span_1_of_left">
					<h3 class="cate">CATEGORIES</h3>
                    <ul class="menu">
                    @foreach($categories as $cat)
                        <li class="item1"><a href="{{route('categorie-page',$cat->id)}}">{{$cat->name}} </a></li>
                    @endforeach
                    </ul>
                </div>
                @endif
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
					<!-- <div class=" chain-grid menu-chain">
	   		     		<a href="single.html"><img class="img-responsive chain" src="{{asset('img/wat.jpg')}}" alt=" " /></a>	   		     		
	   		     		<div class="grid-chain-bottom chain-watch">
		   		     		<span class="actual dolor-left-grid">300$</span>
		   		     		<span class="reducedfrom">500$</span>  
		   		     		<h6><a href="single.html">Lorem ipsum dolor</a></h6>  		     			   		     										
	   		     		</div>
	   		     	</div>
	   		     	 <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a> 	 -->
			</div>
	   		    <div class="clearfix"> </div>        	         
		</div>
	
	<!---->


	<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="latter">
					<h6>BIG SHOP</h6>
					<!-- <div class="sub-left-right">
						<form>
							<input type="text" value="Enter email here"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}" />
							<input type="submit" value="SUBSCRIBE" />
						</form>
					</div> -->
					<div class="clearfix"> </div>
				</div>
				<div class="latter-right">
					<!-- <p>FOLLOW US</p> -->
                    <!-- <div class="text-center"> -->
                        <p>
                           Made by Mohamed Jedata &#160;
                           <i style="color: red;" class="fas fa-heart"></i>
                        </p>
                        
                    <!-- </div> -->
					<ul class="face-in-to">
						<li><a href="#"></a></li>
						<li><a href="#"><span class="facebook-in"> </span></a></li>
						<div class="clearfix"> </div>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- <div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-cate">
					<h6>CATEGORIES</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li ><a href="#">Dignissim neque</a></li>
						<li ><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Ultrices id du</a></li>
						<li><a href="#">Commodo sit</a></li>
						<li ><a href="#">Urna ac tortor sc</a></li>
						<li><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Urna ac tortor sc</a></li>
						<li ><a href="#">Eget nisi laoreet</a></li>
						<li ><a href="#">Faciisis ornare</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate bottom-grid-cat">
					<h6>FEATURE PROJECTS</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li ><a href="#">Dignissim neque</a></li>
						<li ><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Ultrices id du</a></li>
						<li><a href="#">Commodo sit</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate">
					<h6>TOP BRANDS</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li ><a href="#">Dignissim neque</a></li>
						<li ><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Ultrices id du</a></li>
						<li><a href="#">Commodo sit</a></li>
						<li ><a href="#">Urna ac tortor sc</a></li>
						<li><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Urna ac tortor sc</a></li>
						<li ><a href="#">Eget nisi laoreet</a></li>
						<li ><a href="#">Faciisis ornare</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate cate-bottom">
					<h6>OUR ADDERSS</h6>
					<ul>
						<li>Aliquam metus  dui. </li>
						<li>orci, ornareidquet</li>
						<li> ut,DUI.</li>
						<li >nisi, dignissim</li>
						<li >gravida at.</li>
						<li class="phone">PH : 6985792466</li>
						<li class="temp"> <p class="footer-class">Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div> -->
	</div>


    
    <script src="{{asset('js/main.js')}}"></script>

</body>
</html>