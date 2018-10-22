<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', ['posts' => Post::latest()->get()]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate(['name' => 'required', 'body' => 'required']);

        Post::create([
            'user_id' => 1, //auth()->id()
            'name' => $request->name,
            'body' => $request->body,
        ]);

        return redirect('/');
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
            //'posts' => $post->user->posts()->latest()->get()
        ]);
    }


}
