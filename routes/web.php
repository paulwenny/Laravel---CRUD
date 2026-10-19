<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return "Hello Dunia";
});

Route::get('/welcome', function(){
    return View('welcome');
});

// Mengunakan Route Untuk Mengakses file pada folder views
// Route::get('/index', function(){
//     return View('tampilan.index');
// });

// Mengunakan Route untuk mengakses controler
Route::get('/index', [IndexController::class, 'index']);

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::put('/buku/{id}/update', [BukuController::class, 'update'])->name('buku.update');

Route::delete('/buku/{id}/delete', [BukuController::class, 'destroy'])->name('buku.delete');