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
Route::get('/shop', 'ShopController@index');
Route::get('/', 'HomepageController@index')->name('home');
Route::resource('users', 'UserController');

Auth::routes();

//For shopping cart

Route::get('/add-to-cart/{id}', 'ItemController@getAddToCart')->name('item.addToCart');
Route::get('/shopping-cart', 'ItemController@getCart')->name('item.shoppingCart');
Route::get('/reduce/{id}', 'ItemController@getReduceByOne')->name('item.reduceByOne');
Route::get('/increase/{id}', 'ItemController@getIncreaseByOne')->name('item.increaseByOne');
Route::get('/remove/{id}', 'ItemController@getRemoveItem')->name('item.removeItem');
Route::get('/checkout', 'ItemController@getCheckout')->name('checkout');
Route::post('/checkout', 'ItemController@postCheckout')->name('checkout');


