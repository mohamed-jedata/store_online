
	<!--header-->
	<div class="header">
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<a href="{{route('index')}}"><img src="{{asset('img/logo.png')}}" alt=" " /></a>
					</div>
					<div class="search">
              <form>
                  <div class="form-group row">
                      <div class="col-md-9 col-sm-8">
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      </div>
                      <button style="position: absolute;right: 0;top:0" class="btn btn-outline-success my-2 my-sm-2 col-md-3 col-sm-3" type="submit">Search</button>
                  </div>
              </form>
          </div> 
                    

                  
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">					
						

                @if (Route::has('login'))
                        @auth
                            <!-- <li>
                              <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">
                                Home
                              </a>
                            </li> -->
                            <!-- <div class="account"><a href="login.html"><span> </span>YOUR ACCOUNT</a></div> -->
                            <div class="dropdown account">
                                  <img  class="dropbtn" onclick="myFunction()" src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle"
                                        style="height: 34px;" alt="avatar image">
                                        <span style="vertical-align: middle;padding-bottom:10px">
                                        <i  class="fas fa-sort-down"></i>
                                        </span>
                                      <div id="myDropdown" class="dropdown-content" style="text-align: left;">
                                          <a href="{{ route('profile')}}">Profile </a>
                                          <a href="{{ route('profile')}}#my_products">Mes Produits</a>
                                          <a href="{{ route('logout')}}">Deconnection</a>
                                      </div>
                            </div>
                        @else 
                        <ul class="login">
                            <li><a href="{{ route('login') }}"><span> </span>S'inscrire</a></li>
                            @if (Route::has('register'))
                                |
                              <li ><a href="{{ route('register') }}">Crier un Compte</a></li>
                            @endif
                        </ul>
                        @endauth
                @endif
						<div class="cart">
                            <!-- <a href="#"><span> </span>CART</a> -->
                            <a href="{{ route('cart.index') }}">
                                <i class="fa" style="font-size:24px;color: #f97f77;">&#xf07a;</i>
                            </a>
                            @php $nb = session()->pull('nb_items') ; @endphp
                            @if(!empty($nb))
                            <span class='badge badge-warning' id='lblCartCount'> {{$nb}} </span>
                            @endif

                        </div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<!---->



















<!-- <div class="bg-light">

  <div class="container">

  <div class="row ">
      <div class="col-md-3">
          <h2>Store Online</h2>
      </div>
      <div class="col-md-4">
        <form class="form-inline my-2">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
      <div class="col-md-4 my-2 text-right">
              
              <i class="fas fa-shopping-cart pl-0"></i>
              <span class="badge badge-danger">1</span>
      </div>
  </div>



</div>



</div> -->




<!-- Navbar -->
<!-- <nav class="navbar navbar-expand-md navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#!">
        Store Online
    </a>

    <!-- Collapse button -->
    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav1"
      aria-controls="basicExampleNav1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->

    <!-- <form class="form-inline my-2 my-lg-0" style="text-align: center;">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->


    <!-- Links -->
    <!-- <div class="collapse navbar-collapse" id="basicExampleNav1"> -->

      <!-- Right -->
      <!-- <ul class="navbar-nav ml-auto">
     
          <li class="nav-item">
            <a href="#!" class="nav-link waves-effect">
              Contact
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
              Authentifier
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Se connecter</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Crier un Compte</a></li>
            </ul>
          </li>
        <li class="nav-item">
            <a href="#!" class="nav-link navbar-link-2 waves-effect">
              
              <i class="fas fa-shopping-cart pl-0"></i>
              <span class="badge badge-danger">1</span>
            </a>
        </li>
      </ul>

    </div> -->
    <!-- Links -->
  <!-- </div>
</nav> -->
<!-- Navbar -->











<!-- 
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark" >
  <div class="container">
    <a class="navbar-brand" href="#">Store Online</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/category">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/product">Product</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/create_product">create Product</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="/cart">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/create_account">create account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/edit_product">edit product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profile">profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sign_in">sign in</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav> -->