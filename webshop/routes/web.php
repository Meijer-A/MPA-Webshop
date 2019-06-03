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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'IndexController@index');

Route::resources([
    'category' => 'CategoryController',
    'shoppingcart' => 'ShoppingCartController',
    'product' => 'ProductController',
]);

// Cart
Route::post('shoppingcart/{id}', "ShoppingCartController@add");
Route::get('shoppingcart/remove', "ShoppingCartController@destroyAll");

Auth::routes();
