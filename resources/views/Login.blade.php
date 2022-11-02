@extends('layout.main')
@section('container')

<div class="row justify-content-center mt-5">
	<div class="col-lg-6">

		@if (session()->has('errorLogin'))
		<div class="alert alert-danger justify-content-center">
			{{ session('errorLogin') }}
		</div>
		@endif
		
		<div class="container justify-content-center" style="" >
		<main class="form-signin">
			<form action="/login" method="post">
				@csrf
				<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

				<div class="form-floating" widht="50%">
					<label for="floatingInput">Email address</label>
					<input type="email" style="width: 30%" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email">
				</div>
				<div class="form-floating" >
					<label for="floatingPassword">Password</label>
					<input type="password" style="width: 30%" class="form-control" id="floatingPassword" placeholder="Password" name="password">
				</div>

				<button class="w-100 btn btn-lg btn-primary mt-7" style="margin-top:40px; " type="submit">Sign in</button>
			</form>
		</main>
	</div>
</div>
</div>


@endsection