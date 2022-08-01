<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;


Route::get('category/', [CategoryController::class,"index"])->name('category.home');

Route::post('category/', [CategoryController::class,"store"])->name('category.store');
Route::post('category/update/{id}', [CategoryController::class,"update"])->name('category.update');
Route::get('category/update/{id}', [CategoryController::class,"edit"])->name('category.edit');
Route::get('category/delete/{id}', [CategoryController::class,"delete"])->name('category.delete');


Route::get('product/', [ProductController::class,"index"])->name('product.home');
Route::get('dashboard/', [ProductController::class,"dashboard"])->name('productPage.index');
Route::get('product/create', [ProductController::class,"insert"])->name('product.create');
Route::post('product/create', [ProductController::class,"store"])->name('product.store');
Route::post('product/update/{id}', [ProductController::class,"update"])->name('product.update');
Route::get('product/update/{id}', [ProductController::class,"edit"])->name('product.edit');
Route::get('product/delete/{id}', [ProductController::class,"destroy"])->name('product.delete');



Route::get("/",[HomeController::class,"index"])->name("homepage");
Route::get("/category-page/{cat_id}",[HomeController::class,"categoryPage"])->name("categoryPage");
Route::get("/product/{pro_id}",[HomeController::class,"oneView"])->name("oneView");
//Route::get("/buyNow/{pro_id}",[HomeController::class,"buyNow"])->name("buyNow");

Route::controller(AuthController::class)->group(function () {
    Route::match(["get","post"],'/login', 'login')->name('login');
    Route::match(["get","post"],'/register', 'register')->name('register');
    Route::get('/logout', 'logout')->name('logout');
});
