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
    return view('welcome');
});

Route::get('home', 'HomeController@index')->name('home');

Route::get('about', 'AboutController@index')->name('about');

Route::get('contacts', 'ContactController@index')->name('contacts');

Route::get('products', 'ProductController@index')->name('products');

Route::get('products/{product}', 'ProductController@show')->name('product');

//Create home, about, contacts, products routes.
