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
        return view('posts', ['posts' => Post::with(['user', 'category'])->whereYear('created_at', '>=', 2023)->whereYear('created_at', '<=', 2024)->filter(request(['search']))->latest()->paginate(9)->withQueryString()]);
    }
}
