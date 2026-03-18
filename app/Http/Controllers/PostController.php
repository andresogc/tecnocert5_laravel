<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function paginatePosts(Request $request)
{
    $posts = Post::with('author','media')
        ->orderBy('published_at','desc')
        ->paginate(6);

    return view('partials.blog-posts', compact('posts'))->render();
}

public function getPost($id)
{
    $post = Post::with('media')->findOrFail($id);

    return response()->json([
        'title'=>$post->title,
        'image'=>$post->media->first()->url ?? '',
        'content'=>$post->content
    ]);
}
}
