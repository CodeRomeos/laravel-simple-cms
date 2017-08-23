@if($message = session('message_danger'))
<div class="alert alert-danger alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<div class='h4'><i class="icon fa fa-ban"></i> {{ $message }}</div>
</div>
@endif

@if($message = session('message_warning'))
<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<div class='h4'><i class="icon fa fa-warning"></i> {{ $message }}</div>
</div>
@endif

@if($message = session('message_success'))
<div class="alert alert-success alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<div class='h4'><i class="icon fa fa-check"></i> {{ $message }}</div>
</div>
@endif

@if($message = session('message'))
<div class="alert alert-info alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<div class='h4'><i class="icon fa fa-info"></i> {{ $message }}</div>
</div>
@endif

@if (count($errors) > 0)
<div class="alert alert-danger alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<div class='h4'><i class="icon fa fa-ban"></i> Whoops!</div>
Looks like there is something wrong with your input. Please try again.
</div>
@endif