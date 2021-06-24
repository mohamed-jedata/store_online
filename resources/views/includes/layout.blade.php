<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    


    <link rel="stylesheet" href="{{--asset('css/bootstrap.min.css')--}}">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />	
<link rel="stylesheet" href="{{asset('css/main.css')}}"> 





    <script src="{{asset('js/jquery.wmuSlider.js')}}"></script> 







<!-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> -->




    <title>@yield('title','BIG SHOP')</title>
</head>
<body>


    @include('includes/navbar')


   <div class="container">

   @yield('content')

   </div>



    <div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="latter">
					<h6>BIGSHOPS</h6>
					<div class="sub-left-right">
						<form>
							<input type="text" value="Enter email here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}">
							<input type="submit" value="SUBSCRIBE">
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
		
	</div>

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <!-- <script src="{{asset('js/jquery.wmuSlider.js')}}"></script>  -->
    <script src="{{asset('js/fontawesome.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>








</body>
</html>