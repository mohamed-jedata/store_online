<!doctype html>
<html lang="en">
  <head>
  	<title>Big Shop - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('css/login_style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">

			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="d-flex">
		      		<div class="w-100">
		      			<h3 class="mb-4">Login</h3>
		      		</div>

		      	</div>
				<form method="POST" action="{{ route('login') }}" class="login-form">
		      	@csrf
                <div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="email" class="form-control rounded-left @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email">
		      	</div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input type="password" class="form-control rounded-left @error('password') is-invalid @enderror" placeholder="Password" required name="password">
	            </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                 @enderror

            
	            <div class="form-group d-flex align-items-center">
	            	<div class="w-100">
	            		<label class="checkbox-wrap checkbox-primary mb-0">
                            Remeber Me
							<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
							<span class="checkmark"></span>
						</label>
					</div>
					<div class="w-100 d-flex justify-content-end">
		            <button type="submit" class="btn btn-primary rounded submit">Login</button>
	            </div>
	            </div>
	            <div class="form-group mt-4">
                    <div class="w-100 text-center">
                        <p class="mb-1">
                            Don't have an account? <a href="{{route('register')}}">Sign Up</a>
                        </p>
                        @if(Route::has('password.request'))
                        <p><a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></p>
                        @endif
                    </div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/popper.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/main_login.js')}}"></script>

	</body>
</html>


