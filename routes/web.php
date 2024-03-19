<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return Inertia::render('Index');
});
Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'index'])->name('articles');
