<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// home page
Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

// products
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save");
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");
Route::delete('/products/{id}', 'App\Http\Controllers\ProductController@destroy')->name("product.destroy");
Route::put('/products/{id}', 'App\Http\Controllers\ProductController@update')->name("product.update");

//comments 
Route::post('/comments/save/{id}', 'App\Http\Controllers\CommentController@save')->name("comment.save");