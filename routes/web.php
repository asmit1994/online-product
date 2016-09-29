<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('admin/products/{products}/confirm',['as'=>'admin.products.confirm','uses'=>'Backend\ProductController@confirm']);
Route::resource('/admin/products', 'Backend\ProductController');

Route::get('admin/carts/{carts}/confirm',['as'=>'admin.carts.confirm','uses'=>'Backend\CartController@confirm']);
Route::resource('/admin/carts', 'Backend\CartController');

Route::get('admin/orders',['as'=>'admin.orders.index','uses'=>'Backend\OrderController@index']);

Route::get('admin/users',['as'=>'admin.users.index','uses'=>'Backend\UserController@index']);


Route::get('product-lists',['as'=>'product.list','uses' => 'Client\ProductController@index']);
Route::get('product-lists/{product}',['as'=> 'product.add.cart','uses'=>'Client\ProductController@cartForm']);

Route::get('carts/{carts}',['as'=>'product.cart','uses'=>'Client\CartController@order']);
Route::post('carts',['as' => 'carts.add' , 'uses' => 'Client\CartController@add']);
Route::get('carts',['as' => 'clients.carts.index' ,'uses' => 'Client\CartController@index']);

Route::get('orders',['as'=> 'client.orders.index','uses' => 'Client\OrderController@index']);
Route::post('orders',['as' => 'orders.add' , 'uses' => 'Client\OrderController@add']);