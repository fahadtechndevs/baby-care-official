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

Route::get('/home', 'FormController@create')->name('home');
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
Route::get('login/view', 'AboutController@loginView')->name('login.view');
Route::get('register/view', 'AboutController@registerView')->name('register.view');
Route::get('forget/view', 'AboutController@forgetView')->name('forget.view');
//Backend Routes starts

//Subscriber
Route::get('/subscribe', 'SubscribeController@show')->name('subscribe.index');
Route::post('/subscriber/add', 'SubscribeController@add')->name('subscriber.add');
//Services
Route::get('/service/show', 'ServiceController@show')->name('service.show');
Route::get('/service/create', 'ServiceController@create')->name('service.create');
Route::post('/service/store', 'ServiceController@store')->name('service.store');
Route::get('/service/destroy/{id}', 'ServiceController@destroy')->name('service.destroy');
Route::get('/service/edit/show/{id}', 'ServiceController@editShow')->name('service.edit.show');
Route::post('/service/edit/store/{id}', 'ServiceController@editStore')->name('service.edit.store');
Route::get('/service', 'ServiceController@allServicesUserView')->name('user.service');
Route::get('/service/description/{id}', 'ServiceController@getServiceDescription')->name('service.get.description');
//Themes
Route::get('theme/view', 'ThemeController@show')->name('themes.view');
Route::get('theme/create', 'ThemeController@create')->name('themes.create');
Route::post('theme/store', 'ThemeController@store')->name('themes.store');
Route::get('/destroy/theme/{id}', 'ThemeController@destroy')->name('theme.destroy');
//faqs
Route::get('faqs/view', 'faqsController@show')->name('faqs.view');
Route::get('faqs/add/view', 'faqsController@add')->name('faqs.add');
Route::post('faqs/create', 'faqsController@create')->name('faqs.create');
Route::get('faqs/destroy/{id}', 'faqsController@destroy')->name('faqs.destroy');
Route::get('faqs/updateView/{id}', 'faqsController@updateView')->name('faqs.update');
Route::post('faqs/updatestore/{id}', 'faqsController@updateStore')->name('faqs.update.store');
Route::get('faqs/user', 'faqsController@faqsToUser')->name('faqs.user');
//Blocks
Route::get('/block/show', 'BlockController@show')->name('block.show');
Route::get('/block/create', 'BlockController@create')->name('block.create');
Route::post('/block/store', 'BlockController@store')->name('block.store');
Route::get('block/destroy/{id}', 'BlockController@destroy')->name('block.destroy');
Route::get('/block/edit/show/{id}', 'BlockController@editShow')->name('block.edit.show');
Route::post('/block/edit/store/{id}', 'BlockController@editStore')->name('block.edit.store');
Route::get('/blogs/users', 'BlockController@BlogsToUser')->name('blog.user');
//packages
Route::get('package/view', 'PackagesController@show')->name('packages.view');
Route::get('package/add/view', 'PackagesController@add')->name('packages.add');
Route::post('package/create', 'PackagesController@create')->name('packages.create');
Route::get('package/destroy/{id}', 'PackagesController@destroy')->name('packages.destroy');
Route::get('package/updateView/{id}', 'PackagesController@updateView')->name('packages.update');
Route::post('package/updatestore/{id}', 'PackagesController@updateStore')->name('packages.update.store');
//about
Route::get('aboutpage', 'AboutController@editAbout')->name('edit.About');
Route::post('aboutpage/edit/store/{id}', 'AboutController@store')->name('edit.store');
//Features
Route::get('feature/view', 'FeatureController@show')->name('feature.view');
Route::get('feature/add/view', 'FeatureController@add')->name('feature.add');
Route::post('feature/create', 'FeatureController@create')->name('feature.create');
Route::get('feature/destroy/{id}', 'FeatureController@destroy')->name('feature.destroy');
Route::get('feature/updateView/{id}', 'FeatureController@updateView')->name('feature.update');
Route::post('feature/updatestore/{id}', 'FeatureController@updateStore')->name('feature.update.store');
Route::get('login/view', 'AboutController@loginView')->name('login.view');
Route::get('register/view', 'AboutController@registerView')->name('register.view');
//Orderformstart
Route::post('order/submit', 'FormController@orderFormSubmit')->name('order.form.submit');
Route::get('order/get', 'FormController@viewInAdminPanel')->name('all.orders');
Route::get('user/order/get', 'FormController@userOrderShow')->name('show.order');
Route::get('user/order/destroy/{id}', 'FormController@UserOrderDelete')->name('destroy.order');
Route::get('order/edit/show/{id}', 'FormController@userOrderEditShow')->name('user.order.edit');
Route::post('user/order/edit/save{id}', 'FormController@orderEditUserSave')->name('order.user.edit.save');
//paypal-Integartion Routes
Route::get('/paypal/{id}', 'OrderController@paypal')->name('paypal');
Route::get('processPaypal', 'OrderController@processPaypal')->name('process.paypal');
Route::get('cancelPaypal', 'OrderController@cancelPaypal')->name('cancel.paypal');

// Route::get('test', function () {
// 	$alldata = PackageFeatureModel::where('package_id', 18)->delete();
// 	dd($alldata);
// });
