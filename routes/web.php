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


Route::get('/', 'PageController@index')->name('home');

Route::get('about', 'PageController@about')->name('about');

Route::get('contacts', 'PageController@contact')->name('contacts');

Route::get('/products', 'ProductsController@index')->name('products');

//Create home, about, contacts, products.
