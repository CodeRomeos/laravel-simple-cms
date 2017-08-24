<?php

function appName()
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

function generateVerificationCode()
{
	return sha1(md5(uniqid()));
}