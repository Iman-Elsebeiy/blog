<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/iti', function () {
    return view('iti');
});

    Route::get("/post/adding",[PostController::class,'create'])->name('posts.create');
    Route::get("/posts",[PostController::class,'index'])->name('posts.index');
    Route::post("/posts",[PostController::class,'store'])->name('posts.store');

    Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');

    // Route::get("/post/{id}",[PostController::class,'show'])
    //   ->where('id', '[0-9]+')
    //   ->name('posts.show');

    Route::delete("/post/{id}",[PostController::class,'destroy']) ->name('posts.destroy');
    Route::get("/post/{id}/edit",[PostController::class,'edit']) ->name('posts.edit');
    Route::put("/post/{id}",[PostController::class,'update']) ->name('posts.update');


