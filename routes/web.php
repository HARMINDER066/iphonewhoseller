<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\FrontController;
 use App\Http\Controllers\backendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [FrontController::class, 'home'])->name('home');
 Route::get('/product-detail/{id}', [FrontController::class, 'productDetails'])->name('product.details');
 Route::get('/category/{type}', [FrontController::class, 'category'])->name('category');

// Route::get('/send-msg-request', [ApiController::class, 'sendSMS']);


Route::prefix('admin')->group(function () {
    Route::get('products', [backendController::class, 'list'])->name('product.list');
     Route::get('products/create', [backendController::class, 'create'])->name('product.create');
     Route::post('/products/store', [backendController::class, 'store'])->name('products.store');
     // Route::get('products/{product}', [backendController::class, 'show'])->name('product.show');
    Route::get('products/{product}/edit', [backendController::class, 'edit'])->name('product.edit');
    // Route::put('products/{product}', [backendController::class, 'update'])->name('product.update');
    Route::delete('products/{product}', [backendController::class, 'destroy'])->name('product.destroy');
});
