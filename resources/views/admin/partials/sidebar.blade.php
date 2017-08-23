<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="/assets/admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Admin</p>
      <a href="#">{{ Auth::user()->email }}</a>
    </div>
  </div>
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="">
      <a href="/admin">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>

    <li class="treeview">
      <a href="#">
        <i class="fa fa-book"></i>
        <span>Pages</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> All Pages</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Create Page</a></li>
      </ul>
    </li>
	<li class="treeview {{ Request::url() == route('admin.categories.index') || Request::url() == route('admin.categories.index', 'create') ? 'active' : '' }}">
      <a href="#">
        <i class="fa fa-book"></i>
        <span>Categories</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="{{ Request::url() == route('admin.categories.index') ? 'active' : '' }}"><a href="{{ route('admin.categories.index') }}"><i class="fa fa-circle-o"></i> All Categories</a></li>
        <li class="{{ Request::url() == route('admin.categories.index', 'create') ? 'active' : '' }}"><a href="{{ route('admin.categories.index', 'create') }}"><i class="fa fa-circle-o"></i> Create Category</a></li>
      </ul>
    </li>
    <li class="treeview {{ Request::url() == route('admin.posts.index') || Request::url() == route('admin.posts.index', 'create') ? 'active' : '' }}">
      <a href="#">
        <i class="fa fa-book"></i>
        <span>Posts</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="{{ Request::url() == route('admin.posts.index') ? 'active' : '' }}"><a href="{{ route('admin.posts.index') }}"><i class="fa fa-circle-o"></i> All Posts</a></li>
        <li class="{{ Request::url() == route('admin.posts.index', 'create') ? 'active' : '' }}"><a href="{{ route('admin.posts.index','create') }}"><i class="fa fa-circle-o"></i> Create Post</a></li>
      </ul>
    </li>
  </ul>
</section>
<!-- /.sidebar -->
</aside>