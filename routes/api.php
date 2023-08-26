<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [UserController::class, 'loginApi']);
Route::post('/register', [UserController::class, 'registerApi']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth:sanctum');

Route::post('/product/create', [ProductController::class, 'storeProductApi'])->middleware('auth:sanctum');
Route::get('/product', [ProductController::class, 'indexApi'])->middleware('auth:sanctum');
Route::get('/product/{product}', [ProductController::class, 'showApi'])->middleware('auth:sanctum');
Route::put('/product/{product}/update', [ProductController::class, 'updateProductApi'])->middleware('auth:sanctum')->middleware('can:visitAdminPages');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroyProductApi'])->middleware('auth:sanctum')->middleware('can:visitAdminPages');
