<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\City;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function store(PostRequest $request)
    {
        $attr = $request->validated();
        if ($request->file('image')) {
            $attr['image'] = $request->file('image')->store('image');
        }
        Post::create($attr);
        Alert::success('Success', 'Post Baru berhasil di tambahkan !');
        return to_route('post.index');
    }
}
