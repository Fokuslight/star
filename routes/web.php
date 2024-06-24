<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('posts', PostController::class);

//Route::get('/posts', [PostController::class, 'index']);
//Route::get('/posts/create', [PostController::class, 'create']);
//Route::get('/posts/{post}', [PostController::class, 'show']);
//Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
//Route::post('/posts', [PostController::class, 'store']);
//Route::patch('/posts/{post}', [PostController::class, 'update']);
//Route::delete('/posts/{post}', [PostController::class, 'destroy']);
