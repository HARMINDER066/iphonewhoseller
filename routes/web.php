<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\FrontController;
 use App\Http\Controllers\backendController;
 use App\Http\Controllers\AdminController;
 use App\Http\Controllers\ProfileController;

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
 Route::get('/compare', [FrontController::class, 'compare'])->name('compare');
 Route::post('/fetch-product', [FrontController::class, 'fetchproduct'])->name('fetchproduct');

// Route::get('/send-msg-request', [ApiController::class, 'sendSMS']);


Route::prefix('admin')->group(function () {
    
});


Route::prefix('admin')->group(function () {
    Route::get('login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminController::class, 'login'])->name('admin.login');

    Route::middleware('auth:admin')->group(function () {
        Route::get('products', [backendController::class, 'list'])->name('products.list');
     Route::get('products/create', [backendController::class, 'create'])->name('products.create');
     Route::post('/products/store', [backendController::class, 'store'])->name('products.store');
    Route::get('products/{product}/edit', [backendController::class, 'edit'])->name('products.edit');
    Route::put('products/{product}', [backendController::class, 'update'])->name('products.update');
    Route::delete('products/{product}', [backendController::class, 'destroy'])->name('products.destroy');
    Route::get('profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::post('profile', [ProfileController::class, 'updateProfile'])->name('admin.profile.update');
    Route::post('profile/password', [ProfileController::class, 'updatePassword'])->name('admin.profile.updatePassword');
    Route::post('logout', [AdminController::class, 'logout'])->name('admin.logout');

    });
});