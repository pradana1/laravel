<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $post = Post::find($request->id);

        // dd($post->published_at);

        return view('post.show', [
            'post' => $post
        ]);
    }
}
