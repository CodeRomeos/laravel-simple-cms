@include('admin.partials.head')
<div class="wrapper">
	<header class="main-header">
		<!-- Logo -->
		<a href="index2.html" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini">ADM</span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><b>{{ config('app.name', 'Laravel Simple CMS') }}</b></span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		@include('admin.partials.nav')

	</header>
	@include('admin.partials.sidebar')
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<section class="content-header">
			@yield('content-header')
		</section>
		<section class="content">
			@yield('content')
		</section>
	</div>
	<!-- /.content-wrapper -->
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
		<b>Version</b> 1.0
		</div>
		<strong>Developed By: </strong>
	</footer>
</div>
@include('admin.partials.footer')
