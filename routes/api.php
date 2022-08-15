<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Public routes
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/products', [ProductController::class, 'get']);
Route::get('/products/search/{name}', [ProductController::class, 'search']);

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::post('/add', [ProductController::class, 'store']);
    Route::put('/products{id}', [ProductController::class, 'update']);
    Route::delete('/products{id}', [ProductController::class, 'delete']);
    Route::post('/logout', [UserController::class, 'logout']);
});