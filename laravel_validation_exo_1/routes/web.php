<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class,'index'])->name('book');
Route::get('/newBook', [BookController::class,'create'])->name('newBook');
Route::get('/create', [BookController::class,'create'])->name('create');
Route::post('/store', [BookController::class,'store'])->name('store');
Route::get('/books/{id}/show', [BookController::class,'show'])->name('show');
Route::get('/books/{id}/edit', [BookController::class,'edit'])->name('edit');
Route::put('/books/{id}/update', [BookController::class,'update'])->name('update');
Route::delete('/books/{id}/delete', [BookController::class,'destroy'])->name('delete');
Route::delete('/books/deleteAll', [BookController::class,'destroyAll'])->name('deleteAll');
