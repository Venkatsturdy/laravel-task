<?php

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\PostController;
use Illuminate\Support\Facades\Route;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/update-profile', [AuthController::class, 'updateprofile']);
    Route::get('/dashboard', [PostController::class, 'dashboard']);
    Route::get('/posts', [PostController::class, 'index']);
    Route::post('/post/create', [PostController::class, 'store']);
    Route::post('/post/delete', [PostController::class, 'destroy']);
    Route::post('/posts/comment', [PostController::class, 'comment']);
    Route::post('/like', [PostController::class, 'reactToPost']);
    Route::get('/summary', [PostController::class, 'summary']);
});
