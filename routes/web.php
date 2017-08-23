<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin'], 'as'=>'admin.'], function() {
	Route::get('/', 'AdminController@index')->name('dashboard');
	Route::group(['prefix' => 'categories', 'as' => 'categories.'], function() {
		Route::post('/create', 'CategoryController@create');
		Route::get('/{id}/edit', 'CategoryController@edit')->name('edit');
		Route::post('/{id}/edit', 'CategoryController@update');
		Route::get('/{type?}', 'CategoryController@adminIndex')->name('index');
	});
	Route::group(['prefix' => 'posts', 'as' => 'posts.'], function() {
		Route::get('/edit/{id}', 'PostController@edit')->name('edit');
		Route::post('/edit/{id}', 'PostController@update');
		Route::get('/{type?}', 'PostController@adminIndex')->name('index');
	});
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'blog', 'as' => 'blog.'], function() {
	Route::get('/{slug}', 'PostController@show')->name('post');
	Route::get('/', 'PostController@index')->name('index');
});

Route::get('/', function () {
    return view('welcome');
});
