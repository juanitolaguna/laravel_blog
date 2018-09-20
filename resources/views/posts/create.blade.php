@extends('layouts.master')


@section('content')

<div class="col-sm-8 blog-main">

	<h1>Publish a post</h1>

	<hr>

	<form action="/posts" method="POST"> 
		{{ csrf_field() }}
		<div class="form-group">
			<label for="title">Title:</label>
			<input type="text" class="form-control" id="title" name="title">
		</div>

		<div class="form-group">
			<label for="body">Body</label>
			<textarea name="body" id="body" class="form-control"></textarea>
		</div>

		<button type="submit" class="btn btn-primary">Publish</button>

		@include('layouts.errors')

	</form>




</div>


@endsection