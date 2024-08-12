<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $posts = Post::all();
        return response()->view('sitemap', ['posts' => $posts])->header('Content-Type', 'text/xml');
    }
}
