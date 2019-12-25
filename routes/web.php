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

Route::get('/', 'WelcomeController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@userlogout')->name('user.logout');
Route::prefix('admin')->group(function () {

	Route::get('/login', 'Auth\AdminLoginController@showloginform')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/logout', 'Auth\AdminLoginController@adminlogout')->name('admin.logout');
	Route::get('/', 'AdminController@index')->name('admin');
});
Route::resource('admin', 'AdminController')->except('index', 'show', 'destroy', 'create', 'store');
//Frontend Interface Routes
Route::get('/about', 'AboutController@create')->name('about');
Route::get('/design', 'DesignsController@create')->name('design');
Route::get('/form', 'FormController@create')->name('form');
// Route::get('/index', 'IndexController@create')->name('index');
Route::get('/logo/design', 'LogoController@create')->name('logo.design');
Route::get('/price', 'PriceController@create')->name('print');
//Backend Routes starts

//Subscriber
Route::get('/subscribe', 'SubscribeController@show')->name('subscribe.index');
Route::post('/subscriber/add', 'SubscribeController@add')->name('subscriber.add');
//Services
Route::get('/service/show', 'ServiceController@show')->name('service.show');
Route::get('/service/create', 'ServiceController@create')->name('service.create');