<?php

namespace App\Http\Controllers;

use App\Tutorial;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function index()
    {
        return view('tutorials.index', ['tutorials' => Tutorial::latest()->get()]);
    }

    public function create()
    {
        return view('tutorials.create');
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

    public function show(Tutorial $tutorial)
    {
        return view('tutorials.show', [
            'tutorial' => $tutorial,
            //'tutorials' => $tutorial->user->posts()->latest()->get()
        ]);
    }

    public function addComment(Tutorial $tutorial, Request $request)
    {
        $request->validate(['body' => 'required']);

        $tutorial->comments()->create([
            'user_id' => 1,
            'body' => $request->body,
        ]);

        return back();
    }
}
