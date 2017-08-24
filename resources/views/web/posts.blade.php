@extends('web.layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			@foreach($posts as $post)
			<div class="panel panel-default">
				<div class="panel-body">
					<h3>{{ $post->title }}</h3>
					{!! $pos->body !!}
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

@endsection