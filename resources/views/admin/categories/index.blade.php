@extends('admin.master')

@section('title', 'Categories - Admin')

@section('content-header')
<h1>Categories <a href='{{ route("admin.categories.index", "create") }}' class='btn btn-default'>Add New</a></h1>
@endsection

@section('content')
<div class="row">
	<div class="col-xs-12">
	<div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title">Total :</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Title</th><th>Image</th><th>Slug</th><th>Seo Title</th>
						<th>Created At</th><th>Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($categories as $category)
				<tr>
					<td>{{ $category->title }}</td>
					<td></td>
					<td>{{ $category->slug }}</td>
					<td>{{ $category->seo['title'] }}</td>
					<td>{{ $category->created_at->diffForHumans() }}</td>
					<td><a href='{{ route("admin.categories.edit", $category->id) }}' class='btn btn-info btn-sm'><i class='fa fa-pencil'></i></a></td>
				</tr>
				@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>Title</th><th>Image</th><th>Slug</th><th>Seo Title</th>
						<th>Created At</th><th>Action</th>
					</tr>
				</tfoot>
			</table>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
	</div>
</div>
<div class="row">
	<div class="col-sm-5"></div>
	<div class="col-sm-7"></div>
</div>
@endsection
