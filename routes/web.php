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

Auth::routes();

//Users CRUD
Route::resource('users', 'UserController');

//Items CRUD
Route::resource('items', 'ItemController');


//Cart controller routes
Route::get('/add-to-cart/{id}', 'CartController@getAddToCart')->name('item.addToCart');
Route::get('/shopping-cart', 'CartController@getCart')->name('item.shoppingCart');
Route::get('/reduce/{id}', 'CartController@getReduceByOne')->name('item.reduceByOne');
Route::get('/increase/{id}', 'CartController@getIncreaseByOne')->name('item.increaseByOne');
Route::get('/remove/{id}', 'CartController@getRemoveItem')->name('item.removeItem');

//CHECKOUTS
Route::get('/payment', 'CartController@getCheckout')->name('payment.index')->middleware('auth');
Route::post('/payment', 'CartController@store')->name('payment.store');
Route::get('/confirmation','CartController@getConfirmation')->name('confirmation');

//WISHLIST
Route::get('/wishlist', 'WishlistController@getWishlist')->name('getWishlist')->middleware('auth');
Route::get('/add-to-wish/{id}', 'WishlistController@getAddToWish')->name('addToWish')->middleware('auth');
Route::get('/remove-from-wish/{id}', 'WishlistController@getRemoveFromWish')->name('removeFromWish')->middleware('auth');

//YOUR ORDERS
route::get('/my-orders', 'OrderController@userOrders') -> name('myOrders')->middleware('auth');

//ACCOUNT MANAGEMENT ROUTES
Route::get('/account', 'AccountController@getAccount') -> name('getAccount');
Route::post('/account', 'AccountController@postAccount') -> name('postAccount');




Route::get('/news', function () {
    return view('news');
});


Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact-us');
});


Route::get('/email', function () {
    return new \App\Mail\ConfirmationMail();
});
