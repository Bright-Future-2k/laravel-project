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

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('categories')->group(function () {
    Route::get('/','CategoryController@index')->name('categories.list');
    Route::post('/store','CategoryController@store')->name('categories.create');
    Route::get('/{id}','CategoryController@show')->name('categories.show');
    Route::post('/update/{id}','CategoryController@update')->name('categories.update');
    Route::get('/destroy/{id}','CategoryController@destroy')->name('categories.destroy');
    Route::post('/search','CategoryController@search')->name('categories.search');
});

Route::prefix('books')->group(function () {
   Route::get('/','BookController@index')->name('books.list');
   Route::post('/store','BookController@store')->name('books.store');
   Route::get('/{id}','BookController@show')->name('books.show');
   Route::post('/update/{id}','BookController@update')->name('books.update');
   Route::get('/destroy/{id}','BookController@destroy')->name('books.destroy');
   Route::get('/search','BookController@search')->name('books.search');
});

