<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\RoleController;
use App\Models\Book;
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
// Route::prefix('book')->group(function(){
//     Route::get('/',[BookController::class, 'index'])->name('book.list');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('book')->group(function () {
    Route::get('/', [BookController::class, 'index'])->name('book.list');
    Route::get('/create', [BookController::class, 'create'])->name('book.create');
    Route::post('/store', [BookController::class, 'store'])->name('book.store');
    Route::get('/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
    Route::post('/update/{id}', [BookController::class, 'update'])->name('book.update');
    Route::get('/destroy/{id}', [BookController::class, 'delete'])->name('book.delete');
});

Route::prefix('student')->group(function () {
    Route::get('/', [StudentController::class,'index'])->name('student.list');
    Route::get('/create', [StudentController::class,'create'])->name('student.create');
    Route::post('/store', [StudentController::class,'store'])->name('student.store');
    Route::get('/edit/{id}', [StudentController::class,'edit'])->name('student.edit');
    Route::post('/update/{id}', [StudentController::class,'update'])->name('student.update');
    Route::get('/destroy/{id}', [StudentController::class,'destroy'])->name('student.delete');
    Route::get('/export/', [StudentController::class, 'export'])->name('student.export');
    Route::get('/import/', [StudentController::class, 'import'])->name('student.import');
    Route::get('/import/store', [StudentController::class, 'importStore'])->name('student.importStore');
    Route::get('/example', function(){
        return view('student.users');
    });
});

Route::prefix('role')->group(function () {
    Route::get('/', [RoleController::class,'index'])->name('role.list');
    Route::get('/create', [RoleController::class,'create'])->name('role.create');
    Route::post('/store', [RoleController::class,'store'])->name('role.store');
    Route::get('/edit/{id}', [RoleController::class,'edit'])->name('role.edit');
    Route::post('/update/{id}', [RoleController::class,'update'])->name('role.update');
    Route::get('/destroy/{id}', [RoleController::class,'destroy'])->name('role.delete');
});

Route::prefix('card')->group(function () {
    Route::get('/', [CardController::class,'index'])->name('card.list');
    Route::get('/create', [CardController::class,'create'])->name('card.create');
    Route::post('/store', [CardController::class,'store'])->name('card.store');
    Route::get('/edit/{id}', [CardController::class,'edit'])->name('card.edit');
    Route::post('/update/{id}', [CardController::class,'update'])->name('card.update');
    Route::get('/destroy/{id}', [CardController::class,'destroy'])->name('card.delete');
});