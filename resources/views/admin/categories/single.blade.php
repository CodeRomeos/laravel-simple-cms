@extends('admin.master')

@section('title', isset($category) ? 'Update' : 'Create' . ' category - Admin')

@section('content-header')
<h1>
	Categories <a href='{{ route("admin.categories.index", "create") }}' class='btn btn-default'>Add New</a>
</h1>
<br>
@include('messages.messages')
@endsection

@section('content')
@if(isset($category))
{!! Form::model($category) !!}
@else
{!! Form::open() !!}
@endif
<div class="row">
	<div class="col-xs-12 col-md-8">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class='box-title'>{{ isset($category) ? 'Update' : 'Create' }}</h3>
			</div>
			<div class="box-body">
				<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
				{!! Form::label('title', 'Title') !!}
				{!! Form::text('title', null, ['class'=>'form-control input-lg', 'placeholder'=>'Title']) !!}
				<span class="help-block">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
				</div>
				<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
				{!! Form::label('slug', 'Slug') !!}
				{!! Form::text('slug', null, ['class'=>'form-control input-sm', 'placeholder'=>'Slug/URL']) !!}
				<span class="help-block">{{ $errors->has('slug') ? $errors->first('slug') : '' }}</span>
				</div>
				<div class="form-group">
					{!! Form::label('body', 'Body') !!}
					{!! Form::textarea('body', null, ['class'=>'form-control text-editor', 'placeholder'=>'Body', 'rows'=>'3']) !!}
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-4">
		<div class="box box-primary">
			<div class="box-header"><h3 class='box-title'>SEO</h3></div>
			<div class="box-body">
				<div class="form-group">
					{!! Form::label('seo[title]', 'Title') !!}
					{!! Form::text('seo[title]', null, ['class'=>'form-control', 'placeholder'=>'SEO Title']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('seo[description]', 'Description') !!}
					{!! Form::textarea('seo[description]', null, ['class'=>'form-control', 'rows'=>3, 'placeholder'=>'SEO Description']) !!}
				</div>
			</div>
		</div>
		{!! Form::submit(isset($category) ? 'Update' : 'Create', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
{!! Form::close() !!}
@endsection