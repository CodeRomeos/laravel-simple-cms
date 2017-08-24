@extends('web.layout')

@section('content')
<div class="homepage">
	<div class="jumbotron banner">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-12 text-white">
					<br>
					<br>
					<h1>{{ config('app.name', 'Laravel Simple CMS') }}</h1>
					<p>A simple Content Management System created in <a href='http://laravel.com/docs/5.0' class='text-white' target='_blank'>Laravel 5.4</a></p>
					<br>
					<br>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
