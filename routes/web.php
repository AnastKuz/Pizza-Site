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

use Illuminate\Support\Facades\Route;

Route::get('/', 'ProductController@index');
Route::get('/basket', 'OrderController@index');
Route::get('/basket/add/{id}', 'OrderController@addProduct')->name('basket.add');
Route::get('/basket/delete/{id}', 'OrderController@delete')->name('basket.delete');
