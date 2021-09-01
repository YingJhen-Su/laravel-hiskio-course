<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', 'ProductController');
Route::resource('carts', 'CartController');
Route::resource('cart_items', 'CartItemController');

//Route::group([
//  'middleware' => ['checkValidIp'],
//  'prefix'     => 'web',
//  'namespace'  => 'Web'
//], function() {
//  Route::get('/index', 'HomeController@index');
//  Route::post('/print', 'HomeController@print');
//});