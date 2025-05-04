<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Users\UserController2;

// Halaman awal
Route::view('/', 'welcome');

// Autentikasi
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLogin')->name('login');
    Route::post('/login', 'login')->name('login.submit');
    Route::get('/register', 'showRegister')->name('register');
    Route::post('/register', 'register')->name('register.submit');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
});

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');

    // Manajemen user
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');


    // Manajemen produk (full CRUD)
    Route::resource('products', ProductController::class)->names([
        'index'   => 'products',
        'create'  => 'products.create',
         'store'   => 'products.store',
         'edit'    => 'products.edit',
        'update'  => 'products.update',
         'destroy' => 'products.destroy',
    ]); 
});

//UserBiasa
Route::middleware(['auth'])->prefix('user')->name('user.')->group(function () {

    // Dashboard User
    Route::view('/dashboard', 'user.dashboard')->name('dashboard');

    // Profile Routes
    Route::get('/profile', [UserController2::class, 'profile'])->name('profile');
    Route::get('/profile/edit', [UserController2::class, 'editProfile'])->name('profile.edit');
    Route::put('/profile', [UserController2::class, 'updateProfile'])->name('profile.update');

    // Products Routes
    Route::get('/products', [UserController2::class, 'products'])->name('products');
    Route::get('/products/{id}', [UserController2::class, 'productDetail'])->name('product.detail');

    // Gallery and Contact Routes
    Route::get('/gallery', [UserController2::class, 'gallery'])->name('gallery');
    Route::get('/contact', [UserController2::class, 'contact'])->name('contact');
});
