@extends('layout.common')
@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Register Now !
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="text" name="First Name">
						<span class="focus-input100"></span>
						<span class="label-input100">First Name</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="">
						<input class="input100" type="Last Name" name="Last Name">
						<span class="focus-input100"></span>
						<span class="label-input100">Last Name</span>
					</div>


                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="Email" name="Email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="Password" name="Password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="Password" name="Password">
						<span class="focus-input100"></span>
						<span class="label-input100">Confirm Password</span>
					</div>

			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	@endsection('content')