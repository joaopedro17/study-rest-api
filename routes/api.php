<?php

use App\Http\Controllers\PostApiController;
use App\Models\Post;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/post', [PostApiController::class, 'index']);

Route::post('/post', [PostApiController::class. 'store']);

Route::put('/post/{post}', [PostApiController::class, 'update']);

Route::delete('/post/{post}', [PostApiController::class, 'delete']);

Route::put('/post/{post}', function (Post $post) {
    
    
});

Route::delete('/post/{post}', function (Post $post) {
    
});