<?php

use App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/', Controllers\HomeController::class)->name('home');

Route::get('/login', [Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/login', [Controllers\Auth\LoginController::class, 'authenticate']);

Route::middleware('auth')->group(function () {
    Route::resource('/post', Controllers\PostController::class);
    Route::post('/logout', [Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});

// Category
Route::get('/kategori/{category:slug}', function (Category $category) {
    return view('posts', ['posts' => $category->posts->load('category', 'users'), 'title' => $category->name]);
});
Route::get('/user/{user:slug}', function (User $user) {
    return view('posts', ['posts' => $user->posts->load('category', 'users'), 'title' => $user->name]);
});

// Show Posts
Route::get('/{post:slug}', function (Post $post) {
    return view('post', ['post' => $post->first()]);
});


Route::view('contact', 'contact');
Route::view('about', 'about');
