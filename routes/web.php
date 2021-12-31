<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\BillingController;




Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');

Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');

Route::get('nosotros', [PostController::class, 'nosotros'])->name('posts.nosotros');


Route::get('politicas', [PostController::class, 'politicas'])->name('posts.politicas');

Route::get('terminos', [PostController::class, 'terminos'])->name('posts.terminos');

Route::get('cookies', [PostController::class, 'cookies'])->name('posts.cookies');

// Route::get('cryptos', [PostController::class, 'cryptos'])->name('posts.cryptos');

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');


Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');


//stripe

// Route::get('products', [ProductController::class, 'index'])->name('products.index');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('billing', [BillingController::class, 'index'])->middleware('auth')->name('billing.index');





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


