<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/sample', [\App\Http\Controllers\sample\IndexController::class, 'show']);
// Route::get('/sample/{id}', [\App\Http\Controllers\sample\IndexController::class, 'showId']);

Route::get('/post', \App\Http\Controllers\Post\IndexController::class)
    ->name('post.index');

Route::post('/post', \App\Http\Controllers\Post\CreateController::class)
    ->name('post.create');
