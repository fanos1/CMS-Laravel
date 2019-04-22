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

//Route::get('/', function () {
//   return view('welcome');
//});

/* 
Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
*/


// == BLOG ==
Route::get('users/register',	'Auth\RegisterController@showRegistrationForm');
Route::post('users/register',	'Auth\RegisterController@register');
Route::get('users/logout',	'Auth\LoginController@logout');
//Route::get('users/login',	'Auth\LoginController@showLoginForm');//Display Form
Route::get('users/login',	'Auth\LoginController@showLoginForm')->name('login');
Route::post('users/login',	'Auth\LoginController@login');//post Form


// when registering, after success laravel Redirects user to /home. So, we need Route for that
//Route::get('home',	'PagesController@home');

// === ADMIN ====
/*
Route::group(
	array('prefix'=>'admin', 'namespace'=>'Admin',	'middleware'=>'manager'),	function()	{
		Route::get('users',	'UsersController@index');
	}
);
*/

Route::group(
	array('prefix'=>'admin', 'namespace'=>'Admin',	'middleware'=>'manager'),	function()	{
		// users
		Route::get('users',	['as'=>'admin.user.index',	'uses'=>'UsersController@index']);		
		Route::get('users/{id?}/edit',	'UsersController@edit'); // sow editing FORM
		Route::post('users/{id?}/edit','UsersController@update'); // post FORM

		// roles
		Route::get('roles',	'RolesController@index');
		Route::get('roles/create',	'RolesController@create');
		Route::post('roles/create',	'RolesController@store');

		
		// Admin DASHBOAR :: We have 2 PagesController Files. 
		// One for FrontEnd and another for BackEnd
		// Routs with /admin/ will automatically fire PagesController, which is within /Admin/PagesController
		Route::get('/',	'PagesController@home');

		// pages
		Route::get('pages',	'PagesController@index');
		Route::get('pages/create',	'PagesController@create');
		Route::post('pages/create',	'PagesController@store');
		Route::get('pages/{id}/edit',	'PagesController@edit');
		Route::post('pages/{id}/edit',	'PagesController@update');

		// menus
		Route::get('menus', 'MenusController@index');
		Route::get('menus/create', 'MenusController@create');
		Route::post('menus/create', 'MenusController@store');
		Route::get('menus/{id}/edit', 'MenusController@edit');
		Route::post('menus/{id}/edit', 'MenusController@update');

		// Articles
		Route::get('articles',	'ArticlesController@index');
		Route::get('articles/create',	'ArticlesController@create');
		Route::post('articles/create',	'ArticlesController@store');
		Route::get('articles/{id?}/edit',	'ArticlesController@edit');
		Route::post('articles/{id?}/edit','ArticlesController@update');
	}

);



Route::get('/', 'BlogController@home'); // slug is 'home'. Defined in PagesController@home

Route::get('/blog', 'BlogController@index');
// Route::get('/blog/{slug?}', 'BlogController@show');
Route::get('/{slug}', 'BlogController@show');
