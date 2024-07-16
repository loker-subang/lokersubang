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
        return view('post._form', ['categories' => Category::get(), 'cities' => City::orderBy('name', 'asc')->get()]);
    }

    public function store(Request $request)
    {
        $attr = $request->validate([
            'title' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
            'city_id' => 'required',
            'description' => 'required',
            'body' => 'required',
            'company' => 'required',
            'image' => 'required|image'
        ]);



        if ($request->file('image')) {
            $attr['image'] = $request->file('image')->store('image');
        }

        Post::create($attr);
        return to_route('post.index');
    }
}
