<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReservationController;
use App\Models\Reservation;

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

Route::get('/to.book', function(){
    return view('/book');
});

Route::get('/', [BookController::class , 'ShowBook'])->name('show');

Route::post('/book', [BookController::class, 'store'])->name('store.book');

Route::delete('/delete/{id}', [BookController::class, 'destroy'])->name('delete.book');

Route::get('/edit/{id}', [BookController::class, 'edit'])->name('edit.book');

Route::put('/update/{id}', [BookController::class, 'update'])->name('update.book');

Route::get('/details/{id}', [BookController::class, 'bookDetails'])->name('show.book.details');

Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation');