@extends('layouts.master')

@section('content')

<div class="col-md-8">
	<h1>Sign In</h1>
	<hr>

	<form method="POST" action="/login">
		
		{{ csrf_field() }}	

		<div class="form-group">
			
			<label for="email">Email Adress:</label>

			<input type="email" class="form-control" id="email" name="email" required>
			
		</div>

		<div class="form-group">
			
			<label for="password">Password:</label>

			<input type="password" class="form-control" id="password" name="password" required>
			
		</div>

		<div>

			<button type="submit" class="btn btn-primary">Button</button>
			
		</div>


	</form>

</div>

@endsection