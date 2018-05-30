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

Route::get('/', function () {
    return view('ecom/index');
});

Route::get('product_view', function(){
  return view('ecom/product_view');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
//Yafet UPDATED huehuehuehue
Route::resource('product', 'ProductController');
