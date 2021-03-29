<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User;
use App\Product;
use App\Orders;

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

Route::get('users/', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::post('users/', 'UserController@store');
Route::patch('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@destroy');
Route::get('users/{user}/products/orders', 'UserController@byUser');

Route::get('products/', 'ProductController@index');
Route::get('products/{product}', 'ProductController@show');
Route::post('products/', 'ProductController@store');
Route::patch('products/{product}', 'ProductController@update');
Route::delete('products/{product}', 'ProductController@destroy');

Route::get('orders/', 'OrdersController@index');
Route::get('orders/{orders}', 'OrdersController@show');
Route::post('orders/', 'OrdersController@store');
Route::patch('orders/{orders}', 'OrdersController@update');
Route::delete('orders/{orders}', 'OrdersController@destroy');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
