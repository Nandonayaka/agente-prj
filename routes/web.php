<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/about', function(){
    $data = [
        'name' => 'ali',
        'umur' => 12,
    ];
    return view ('pages.about' , $data);
});

Route::view('/', 'pages.dashboard');
Route::view('/contact', 'pages.contact' );

//product
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/add', [ProductController::class, 'create'])->name('product.create');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/edit/{id}', [ProductController::class, 'update'])->name('product.update');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
