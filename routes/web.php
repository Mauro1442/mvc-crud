<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/register', [UserController::class, 'register']);
Route::post('/log', [UserController::class, 'log']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/product', [ProductController::class, 'index'])->name('product.index')->middleware('auth');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create')->middleware('auth');
Route::post('/product', [ProductController::class, 'store'])->name('product.store')->middleware('auth');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit')->middleware('auth');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update')->middleware('auth');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy')->middleware('auth');
