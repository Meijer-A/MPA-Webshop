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
Route::get('/', 'IndexController@index');

Route::resources([
    'category' => 'CategoryController',
    'product' => 'ProductController',
    'order' => 'OrderController',
]);

// Cart
Route::get('/shoppingcart', "ShoppingCartController@index")->name('shoppingcart.index');
Route::get('/shoppingcart/update', "ShoppingCartController@update");
Route::post('/shoppingcart/change', "ShoppingCartController@changeQuantity");
Route::post('/shoppingcart/{id}', "ShoppingCartController@add");
Route::delete('/shoppingcart/{id}', "ShoppingCartController@destroy");

// Order
Route::get('/showorder', "OrderController@showOrder");

Auth::routes();
