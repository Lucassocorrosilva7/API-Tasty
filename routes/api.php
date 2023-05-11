<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::post('/products', [ProductController::class, 'store'])->withoutMiddleware('auth');
Route::get('/products', [ProductController::class, 'index'])->withoutMiddleware('auth');
Route::get('/products/{id}', [ProductController::class, 'show'])->withoutMiddleware('auth');
Route::apiResource('/categories', CategoryController::class);

// Auth
Route::post('/register', [AuthController::class, 'register']);
