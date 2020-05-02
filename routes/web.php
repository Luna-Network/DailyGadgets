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

//SIMONAS CHECKOUTS
Route::get('/payment', 'CartController@getCheckout')->name('payment.index')->middleware('auth');
Route::post('/payment', 'CartController@store')->name('payment.store');

Route::get('/confirmation','CartController@getConfirmation')->name('confirmation');

//Karolio kosmosas
Route::get('/wishlist', function () {
    return view('wish-list');
});

Route::get('/news', function () {
    return view('news');
});
//WISHLIST
Route::get('/add-to-wish/{id}', 'WishlistController@getAddToWish')->name('addToWish');


Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});
