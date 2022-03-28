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

Route::get('/', function () {
    return view('index');
});

Route::get('/home','App\Http\Controllers\HomeController@index')->name('index');
Route::get('/AboutUs','App\Http\Controllers\AboutusController@aboutus')->name('aboutus');
Route::get('/OurProducts','App\Http\Controllers\ProductsController@products')->name('products');
Route::get('/WhereToBuy','App\Http\Controllers\WheretobuyController@wheretobuy')->name('wheretobuy');
Route::get('/ContactUs','App\Http\Controllers\ContactusController@contactus')->name('contactus');

