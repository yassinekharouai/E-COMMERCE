<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\Admin;

Route::get('/',[HomeController::class,'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);


Route::get('/login', function () {
    return view('auth.login'); // Correct path for Laravel Breeze
})->name('login');


Route::post('/login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store']);

route::get('view_category',[AdminController::class,'view_category'])->middleware(['auth','admin']);

route::post('add_category',[AdminController::class,'add_category'])->middleware(['auth','admin']);


Route::get('/delete_category/{category}', [AdminController::class, 'delete_category'])->name('delete.category');

Route::get('add_product', [AdminController::class, 'add_product'])->middleware(['auth','admin']);

Route::post('upload_product', [AdminController::class, 'upload_product'])->middleware(['auth','admin']);

Route::get('view_product', [AdminController::class, 'view_product'])->middleware(['auth','admin']);

Route::get('delete_product/{id}', [AdminController::class, 'delete_product'])->middleware(['auth','admin']);

Route::get('product_search', [AdminController::class, 'product_search'])->middleware(['auth','admin']);