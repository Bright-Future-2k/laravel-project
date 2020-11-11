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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/','Admin\ArticlesController@index')->name('admin.articles.index');
    Route::get('/create','Admin\ArticlesController@create')->name('admin.articles.create');
    Route::post('/store','Admin\ArticlesController@store')->name('admin.articles.store');
    Route::get('/edit/{id}','Admin\ArticlesController@edit')->name('admin.articles.edit');
    Route::post('/update/{id}','Admin\ArticlesController@update')->name('admins.index');
    Route::get('/delete/{id}','Admin\ArticlesController@destroy')->name('admin.articles.destroy');

    Route::resource('articles', 'Admin\ArticlesController');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('posts', 'HomeController@posts')->name('posts');
Route::post('ajaxRequest', 'HomeController@ajaxRequest')->name('ajaxRequest');
