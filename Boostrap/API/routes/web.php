<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



use App\Http\Controllers\ProductController;


Route::get('/catalog', [ProductController::class, 'index']);
Route::get('/productos/crear', [ProductController::class, 'create'])->name('catalog.create');

//Rutas de pruebas
Route::get('/productos', [ProductController::class, 'indexx']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::delete('/products/{id}', [ProductController::class, 'destroy']) ->name('products.destroy');
Route::patch('/products/{id}', [ProductController::class, 'campoUpdate']);


Route::get('/products/category/{categoryName}', [ProductController::class, 'getProductsByCategory'])->name('products.by.category');
Route::get('/products', [ProductController::class, 'index'])->name('products.indexx');
