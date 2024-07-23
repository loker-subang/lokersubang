<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/', Controllers\HomeController::class)->name('home');
// Show Posts
Route::get('/{post:slug}.html', function (Post $post) {
    return view('post', ['post' => $post]);
});
Route::get('/kategori/{category:slug}', function (Category $category) {
    $posts = $category->posts()->filter(request(['search']))->with('category', 'user')->latest()->paginate(9)->withQueryString();
    return view('posts', ['posts' => $posts, 'title' => $category->name]);
});
Route::get('/user/{user:slug}', function (User $user) {
    return view('posts', ['posts' => $user->posts->load('category', 'user'), 'title' => $user->name]);
});
Route::view('contact', 'contact');
Route::view('about', 'about');
Route::get('login', [Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('login', [Controllers\Auth\LoginController::class, 'authenticate']);

Route::middleware('auth')->group(function () {
    Route::resource('post', Controllers\PostController::class);
    Route::post('logout', [Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});
