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

Route::get('/', 'HomeController@index');

Route::get('/products/{id}', 'ProductController@show')->name('products.show');

//Auth::routes(['verify' => true]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/images/{filename}');

// Admin Routes
Route::name('admin.')->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::resource('products', 'Admin\ProductController');
    });
});
