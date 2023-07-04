<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::all();

        return view('/', ['posts' => $posts]);

    }

    public function show(Post $post)
    {

        return view('show', ['post' => $post]);

    }
}
