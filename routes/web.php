<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/iti', function () {
    return view('iti');
});

    Route::get("/posts",[PostController::class,'index'])->name('posts.index');

    Route::get("/posts/{id}",[PostController::class,'show'])
      ->where('id', '[0-9]+')
      ->name('posts.show');

    Route::get("/post/{id}",[PostController::class,'destroy']) ->name('posts.destroy');

