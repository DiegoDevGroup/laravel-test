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

Route::view('/', 'welcome');

Route::get('products', 'ProductController@indx');

Route::get('cart/{id}', 'ProductController@cart')->name('cart');

Route::get('checkout', 'ProductController@checkout')->name('checkout');

Route::post('specials', 'ProductController@specials');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
