<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::get('/products',[Products::class, 'GetProuducts']);
Auth::routes();

Route::get('/aboutus',[Products::class, 'AboutUs'])->name('aboutus');
Route::get('/callus',[Products::class, 'CallUs'])->name('callus');
Route::get('/myprod',[Products::class, 'MyProducts'])->name('mypro');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard',[Dashboard::class, 'Index'])->name('dashboard');
Route::get('/categories', [CategoriesController::class, 'Index'])->name('categories.index');
Route::post('/addcategories', [CategoriesController::class, 'Create'])->name('categories.create');
Route::get('/deletecategories/{id}',[CategoriesController::class,'Delete'])->name('categories.delete');
Route::get('/editcategories/{id}',[CategoriesController::class,'edit'])->name('categories.edit');
Route::post('/updatecategories', [CategoriesController::class, 'Update'])->name('categories.update');

Route::get('/Products', [ProductsController::class, 'Index'])->name('products.index');
Route::post('/addproducts', [ProductsController::class, 'Create'])->name('products.create');
Route::get('/deleteproduct/{id}', [ProductsController::class, 'DeleteProduct'])->name('products.delete');
Route::get('/editproducts/{id}', [ProductsController::class, 'edit'])->name('products.edit');
Route::post('/updateproducts', [ProductsController::class, 'Update'])->name('products.update');


