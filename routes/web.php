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

Route::get('/item', 'ItemController@index');
Route::get('/shop', 'ShopController@results');
Route::post('/shop', 'ShopController@results');
Route::get('/', 'HomepageController@index')->name('home');
Route::resource('users', 'UserController');

Auth::routes();


Route::resource('items', 'ItemController');


//Cart controller routes
Route::get('/add-to-cart/{id}', 'CartController@getAddToCart')->name('item.addToCart');
Route::get('/shopping-cart', 'CartController@getCart')->name('item.shoppingCart');
Route::get('/reduce/{id}', 'CartController@getReduceByOne')->name('item.reduceByOne');
Route::get('/increase/{id}', 'CartController@getIncreaseByOne')->name('item.increaseByOne');
Route::get('/remove/{id}', 'CartController@getRemoveItem')->name('item.removeItem');

//THESE CHECKOUT NOT WORKING (turn on only to display e-cart)
Route::get('/checkout', 'CartController@getCheckout')->name('checkout');
Route::post('/checkout', 'CartController@postCheckout')->name('checkout');

//SIMONAS CHECKOUTS
//Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
//Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');


//Karolio kosmosas
Route::get('/wishlist', function () {
    return view('wish-list');
});

Route::get('/news', function () {
    return view('news');
});


Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});