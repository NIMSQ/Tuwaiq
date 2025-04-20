<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/products',[Products::class, 'GetProuducts']);
Auth::routes();

Route::get('/aboutus',[Products::class, 'AboutUs'])->name('aboutus');
Route::get('/callus',[Products::class, 'CallUs'])->name('callus');
Route::get('/myprod',[Products::class, 'MyProducts'])->name('mypro');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
