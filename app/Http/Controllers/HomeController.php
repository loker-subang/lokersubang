<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // dump(request('search'));
        return view('posts', ['posts' => Post::with(['user', 'category'])->filter(request(['search']))->latest()->paginate(9)->withQueryString()]);
    }
}
