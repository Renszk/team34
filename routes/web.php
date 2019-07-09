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



Route::group(['middleware' => 'auth'], function() {
  // ログインしていないと表示できないページ↓
    Route::get('/', 'SelectcourseController@index'); 
    Route::get('home', 'ShopController@index');
    Route::get('home/{product}', 'ShopController@show');
    Route::get('shop', 'SelectcourseController@index');
    Route::get('open', 'ShopController@index');
    Route::get('new-products', 'ShopController@create');
    Route::post('store-products', 'ShopController@store');
    Route::get('products/{product}/delete', 'ShopController@destroy');
    Route::post('store-orders', 'OrderController@store');
    Route::post('store-products', 'ShopController@store');
    Route::get('products/{product}/delete', 'ShopController@destroy');
    Route::get('check', 'CheckController@index'); 
    Route::post('confirm', 'CheckController@confirm')->name('check.confirm');
    Route::post('thanks', 'CheckController@thanks')->name('check.thanks');
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact/confirm', 'ContactController@confirm')->name('confirm');
    Route::post('contact/sent', 'ContactController@sent')->name('sent');
    Route::get('order', 'OrderController@index');
    Route::get('orders/{order}/delete', 'OrderController@destroy');
    Route::post('product/find', 'ShopController@find');
    Route::post('posts/search', 'ShopController@search')->name('posts.search');
    Route::get('check', 'CheckController@index');

    Route::get('order/decr/{id}/{amount}', [
    'uses' => 'OrderController@decr',
    'as' => 'order.decr'
    ]);
    Route::get('order/incr/{id}/{amount}', [
    'uses' => 'OrderController@incr',
    'as' => 'order.incr'
    ]);

    Route::post('store-cart', 'CartController@store');
    Route::get('cart', 'CartController@index');

    Route::get('category', 'CategoriesController@index');

});



Auth::routes();

