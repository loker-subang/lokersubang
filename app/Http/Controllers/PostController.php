<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\City;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PostController extends Controller
{
    public function index()
    {
        return view('post.index', [
            'posts' => Post::with('category')->latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('post._form', [
            'post' => new Post(),
            'categories' => Category::get(),
            'cities' => City::orderBy('name', 'asc')->get(),
            'meta' => [
                'header' => 'Create New Post',
                'method' => 'post',
                'url' => '/post',
                'button' => 'Simpan'
            ]
        ]);
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

    public function edit(Post $post)
    {
        return view('post._form', [
            'post' => $post,
            'categories' => Category::get(),
            'cities' => City::orderBy('name', 'asc')->get(),
            'meta' => [
                'header' => 'Edit Post',
                'method' => 'put',
                'url' => '/post/' . $post->id,
                'button' => 'Update'
            ]
        ]);
    }

    public function update(Request $request, $id)
    {

        $attr = $request->validate(
            [
                'title' => 'required',
                'user_id' => 'required',
                'category_id' => 'required',
                'city_id' => 'required',
                'description' => 'required',
                'body' => 'required',
                'company' => 'required'
            ]
        );


        // Check Photo
        if ($request->file('image')) {
            if ($request->image_lama) {
                Storage::delete($request->image_lama);
            }
            $attr['image'] = $request->file('image')->store('image');
        }


        Post::whereId($id)->update($attr);
        Alert::success('Sukses', 'Data kelas berhasil di Update');
        return to_route('post.index');
    }

    public function destroy(Request $request, $id)
    {
        $image = Post::find($id)->first();
        Storage::delete($image->image);
        Post::find($id)->delete();
        Alert::success('Sukses', 'Data kelas berhasil di Hapus');
        return to_route('post.index');
    }
}
