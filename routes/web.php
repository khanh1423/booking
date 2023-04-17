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


Route::get('/', 'ProductController@index')->name('index');


Route::prefix('product')->name('product.')->group(function (){
    Route::get('/', 'ProductController@index')->name('index');
    Route::get('create', 'ProductController@create')->name('create');
    Route::post('store', 'ProductController@store')->name('store');
});

Route::get('book/{slug}', 'BookingController@index')->name('book');

Route::post('/getdate', 'BookingController@getdate')->name('getdate');

Route::post('/store', 'BookingController@store')->name('booking.store');

Route::get('customer', 'CustomerController@index')->name('customer.index');
Route::get('admin/booking', 'AdminBookingController@index')->name('admin.booking.index');
Route::get('admin/booking/{id}', 'AdminBookingController@edit')->name('admin.booking.edit');