<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        return view('post.index');
    }

    public function create()
    {
        return view('post._form', ['categories' => Category::get(), 'cities' => City::get()]);
    }
}
