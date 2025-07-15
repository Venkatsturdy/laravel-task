<?php

use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;


Route::get('login', [AuthController::class, 'loginview'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [AuthController::class, 'registerview'])->name('register');
Route::post('/register-store', [AuthController::class, 'register'])->name('register.submit');


Route::middleware(['auth'])->group(function () {
    Route::get('/', [WebController::class, 'index'])->name('posts.index');
    Route::get('/posts/load-more', [WebController::class, 'loadMorePosts'])->name('posts.loadMore');
    Route::post('/post/react', [WebController::class, 'reactToPost'])->name('posts.react');
    Route::post('/comments/store', [WebController::class, 'storeComment'])->name('comments.store');
    Route::get('/users/{user}', [WebController::class, 'userProfile'])->name('user.profile');
    Route::post('/logout', [WebController::class, 'logout'])->name('logout');
    Route::post('/post/store', [WebController::class, 'poststore'])->name('posts.store');
});
