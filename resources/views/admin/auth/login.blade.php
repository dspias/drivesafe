@extends('layouts.withoutnav')

@section('title', "| Admin LogIn")

@section('stylesheet')

    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_file/css/style.css') }}">
<!--===============================================================================================-->
@endsection

@section('content')


<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Admin Login</h3>
				
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.login') }}">
					@csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" class="form-control" name="email" placeholder="example@mail.com">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
 
 
@endsection

@section('scripts')
<!--===============================================================================================-->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('js/main.js') }}"></script>
@endsection
