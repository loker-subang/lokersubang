<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/', Controllers\HomeController::class)->name('home');
// Show Posts
Route::get('/{post:slug}.html', function (Post $post) {
    return view('post', ['post' => $post,'related' => DB::table('posts')->orderBy('id','desc')->limit(4)->get()]);
});
Route::get('/kategori/{category:slug}', function (Category $category) {
    $posts = $category->posts()->whereYear('created_at', '>=', 2023)->whereYear('created_at', '<=', 2025)->filter(request(['search']))->with('category', 'user')->latest()->paginate(9)->withQueryString();
    return view('posts', ['posts' => $posts, 'title' => $category->name]);
});
Route::get('/user/{user:slug}', function (User $user) {
    return view('posts', ['posts' => $user->posts->load('category', 'user'), 'title' => $user->name]);
});
Route::view('about', 'about');
Route::view('disclaimer', 'disclaimer');
Route::view('faq', 'faq');
Route::view('kontak', 'kontak');
Route::get('login', [Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('login', [Controllers\Auth\LoginController::class, 'authenticate']);

Route::middleware('auth')->group(function () {
    Route::resource('post', Controllers\PostController::class);
    Route::post('logout', [Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});

Route::get('sitemap.xml', Controllers\SitemapController::class);
