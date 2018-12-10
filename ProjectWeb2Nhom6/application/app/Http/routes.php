<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/login', 'LoginController@getLogin');
Route::post('/check-login', 'LoginController@postLogin');

Route::get('/admin/{id}/editpr', 'ShopController@edit');
Route::post('/admin/update', 'ShopController@update');

Route::get('/admin/{id}/deletepr', 'ShopController@deleteProduct');

Route::get('/admin/addnew', 'ShopController@addnewpr');
Route::post('/admin/addnew', 'ShopController@addnew');

Route::get('/admin/addnewproduct', 'ShopController@addnewproduct');

Route::get('/admin', 'ShopController@Admin');
Route::get('/admin/{brand}', 'ShopController@orderByBrandForAdmin');

Route::get('/search', 'ShopController@searchProduct');
Route::get('/shop', 'ShopController@getAllProduct');
Route::get('/shop/{brand}', 'ShopController@orderByBrand');
Route::get('/single-product-details/{id}', 'ShopController@singleProduct');
Route::get('logout','HomeController@getLogout');
Route::get('/', function() {
    return View('index');
});
Route::get('/register',function(){
return view('register');
});

Route::get('/{page}', function($page) {
    return View($page);
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));
