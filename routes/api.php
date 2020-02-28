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

Route::middleware('auth:api/v1')->get('/user', function (Request $request) {
    return $request->user();
});

// customer crud
Route::get('/v1/customers', 'CustomerController@index');
Route::get('/v1/customer/{id}', 'CustomerController@show');
Route::post('/v1/customer', 'CustomerController@store');
Route::put('/v1/customer/{id}', 'CustomerController@update');
Route::delete('/v1/customer/{id}', 'CustomerController@delete');
