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

Route::get('/', [App\Http\Controllers\SiteController::class, 'getHome'])->name('getHome');
Route::get('/aboutus', [App\Http\Controllers\SiteController::class, 'getAboutus'])->name('getAboutus');
Route::get('/foods', [App\Http\Controllers\SiteController::class, 'getFoods'])->name('getFoods');
Route::get('/offer', [App\Http\Controllers\SiteController::class, 'getOffer'])->name('getOffer');
Route::get('/gallerys', [App\Http\Controllers\SiteController::class, 'getGallerys'])->name('getGallerys');
Route::get('/contactus', [App\Http\Controllers\SiteController::class, 'getContactus'])->name('getContactus');
Route::get('/product/{product}', [App\Http\Controllers\SiteController::class, 'getProductDetail'])->name('getProductDetail');
Route::post('/addtocart/', [App\Http\Controllers\SiteController::class, 'postAddtoCart'])->name('postAddtoCart');
Route::get('/cart/', [App\Http\Controllers\SiteController::class, 'getCart'])->name('getCart');
Route::get('/checkout/', [App\Http\Controllers\SiteController::class, 'getCheckout'])->name('getCheckout');
Route::post('/checkout/', [App\Http\Controllers\SiteController::class, 'postCheckout'])->name('postCheckout');

Route::get('/onlinepayment', 'App\Http\Controllers\PayPalController@payWithpaypal')->name('payWithpaypal');
    Route::get('/paypal/check', 'App\Http\Controllers\PayPalController@paymentcheck');
    Route::get('/paypal/error', 'App\Http\Controllers\PayPalController@payPalPaymenterror')->name('payPalPaymenterror');
    Route::get('/paypal/result', 'App\Http\Controllers\PayPalController@getPayPalsuccesspage')->name('getPayPalsuccesspage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
//category ko lagi
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');
Route::get('/manage/category', 'App\Http\Controllers\HomeController@getManageCategory')->name('getManageCategory')->middleware('auth');
Route::post('/manage/category', 'App\Http\Controllers\HomeController@postAddCategory')->name('postAddCategory')->middleware('auth');
Route::get('/manage/category/edit/{categoryid}', 'App\Http\Controllers\HomeController@getEditCategory')->name('getEditCategory')->middleware('auth');
Route::post('/manage/category/edit/{categoryid}', 'App\Http\Controllers\HomeController@postEditCategory')->name('postEditCategory')->middleware('auth');
Route::get('/manage/category/delete/{categoryid}', 'App\Http\Controllers\HomeController@getDeleteCategory')->name('getDeleteCategory')->middleware('auth');
//Product ko lagi.
Route::get('/manage/product', 'App\Http\Controllers\HomeController@getManageProduct')->name('getManageProduct')->middleware('auth');
Route::post('/manage/product', 'App\Http\Controllers\HomeController@postAddProduct')->name('postAddProduct')->middleware('auth');
Route::get('/manage/product/edit/{product}', 'App\Http\Controllers\HomeController@getEditProduct')->name('getEditProduct')->middleware('auth');
Route::post('/manage/product/edit/{product}', 'App\Http\Controllers\HomeController@postEditProduct')->name('postEditProduct')->middleware('auth');
Route::get('/manage/product/delete/{product}', 'App\Http\Controllers\HomeController@getDeleteProduct')->name('getDeleteProduct')->middleware('auth');


Route::group(['middleware' => 'auth'], function () { 
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

