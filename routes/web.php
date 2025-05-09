<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ShoppingController;


Route::get('/', [ShoppingController::class, 'GetCategories'])->name('welcome');

Auth::routes();

Route::prefix('shopping')->group(function(){
    Route::get('/list/{categories_id}', [ShoppingController::class, 'List'])->name('shopping.list');
    Route::get('/details/{product_id}', [ShoppingController::class, 'Details'])->name('shopping.details');
    Route::get('/addtocart', [ShoppingController::class, 'Add_To_Cart'])->name('shopping.cart');
    Route::get('/CheckOut', [ShoppingController::class, 'CheckOut'])->name('shopping.CheckOut');
    Route::post('/pay', [ShoppingController::class, 'pay'])->name('shopping.pay');



});

Route::prefix('dashboard')->middleware('auth')->group(function(){

    Route::get('/dashboard',[Dashboard::class, 'Index'])->name('dashboard');

    Route::prefix('categories')->group(function(){

    Route::get('/categories', [CategoriesController::class, 'Index'])->name('categories.index');
    Route::post('/addcategories', [CategoriesController::class, 'Create'])->name('categories.create');
    Route::get('/deletecategories/{id}',[CategoriesController::class,'Delete'])->name('categories.delete');
    Route::get('/editcategories/{id}',[CategoriesController::class,'edit'])->name('categories.edit');
    Route::post('/updatecategories', [CategoriesController::class, 'Update'])->name('categories.update');
});
    Route::prefix('products')->group(function(){
    Route::get('/Products', [ProductsController::class, 'Index'])->name('products.index');
    Route::post('/addproducts', [ProductsController::class, 'Create'])->name('products.create');
    Route::get('/deleteproduct/{id}', [ProductsController::class, 'DeleteProduct'])->name('products.delete');
    Route::get('/editproducts/{id}', [ProductsController::class, 'edit'])->name('products.edit');
    Route::post('/updateproducts', [ProductsController::class, 'Update'])->name('products.update');
});
});



Route::get('/aboutus',[Products::class, 'AboutUs'])->name('aboutus');
Route::get('/callus',[Products::class, 'CallUs'])->name('callus');
Route::get('/myprod',[Products::class, 'MyProducts'])->name('mypro');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





