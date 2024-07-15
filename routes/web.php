<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;


Route::get('/', Controllers\HomeController::class)->name('home');


Route::middleware('auth')->group(function () {
    // POSTS
    Route::resource('/post', Controllers\PostController::class);
    Route::post('/logout', [Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});


Route::get('/login', [Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/login', [Controllers\Auth\LoginController::class, 'authenticate']);

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
