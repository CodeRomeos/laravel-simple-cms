<?php

function app_name()
{
	return config('app.name', 'Laravel Simple CMS');
}

function dashboardRoute()
{
	if( ! \Auth::check())
		return null;

	if(\Auth::user()->isAdmin)
		return route('admin.dashboard');

	return route('user.dashboard');
}