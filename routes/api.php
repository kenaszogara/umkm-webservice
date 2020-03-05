<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// CustomerAut endpoint
Route::post('/register', 'CustomerAuthController@register');
Route::post('/login', 'CustomerAuthController@login');
Route::get('/logout', 'CustomerAuthController@logout');
Route::get('/user', 'CustomerAuthController@getAuthUser');

// Customer endpoint
Route::get('/customers', 'CustomerController@index');
Route::post('/customers', 'CustomerController@store');
Route::get('/customers/{customer}', 'CustomerController@show');
Route::put('/customers/{customer}', 'CustomerController@update');
Route::delete('/customers/{customer}', 'CustomerController@destroy');

// Product endpoint
Route::get('/products', 'ProductController@index');
Route::post('/products', 'ProductController@store');
Route::get('/products/{product}', 'ProductController@show');
Route::put('/products/{product}', 'ProductController@update');
Route::delete('/products/{product}', 'ProductController@destory');

// Merchant endpoint
Route::get('/merchants', 'MerchantController@index');
Route::post('/merchants', 'MerchantController@store');
Route::get('/merchants/{merchant}', 'MerchantController@show');
Route::put('/merchants/{merchant}', 'MerchantController@update');
Route::delete('/merchants/{merchant}', 'MerchantController@destroy');

// Product Categories endpoint
Route::get('/categories', 'ProductCategoryController@index');
Route::get('/categories/{category}', 'ProductCategoryController@show');

// Bank endpoint
Route::get('/banks', 'BankController@index');
Route::get('/banks/{bank}', 'BankController@show');