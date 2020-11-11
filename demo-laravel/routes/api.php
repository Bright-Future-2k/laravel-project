<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::prefix('api/book')->group(function () {
//     Route::get('/', [BookController::class, 'index'])->name('book.list');
//     Route::get('/create', [BookController::class, 'create'])->name('book.create');
//     Route::post('/store', [BookController::class, 'store'])->name('book.store');
//     Route::get('/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
//     Route::post('/update/{id}', [BookController::class, 'update'])->name('book.update');
//     Route::get('/destroy/{id}', [BookController::class, 'delete'])->name('book.delete');
// });
