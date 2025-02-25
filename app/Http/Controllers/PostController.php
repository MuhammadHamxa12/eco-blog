<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    // Display all posts for the logged-in user
    public function index()
    {
        $posts = auth()->user()->posts;
        return view('posts.index', compact('posts'));
    }

    // Show the form to create a new post
    public function create()
    {
        return view('posts.create');
    }

    // Store a newly created post
    public function store(Request $request)
    {
        $request->validate([
            'post_title' => 'required|string|max:255',
            'post_content' => 'required|string'
        ]);

        $post = new Post();
        $post->title = $request->post_title;
        $post->content = $request->post_content;
        $post->user_id = auth()->id();
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    // Show the form to edit a post
    public function edit(Post $post)
    {
        if ($post->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
        return view('posts.edit', compact('post'));
    }

    // Update the specified post
    public function update(Request $request, Post $post)
    {
        if ($post->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'post_title' => 'required|string|max:255',
            'post_content' => 'required|string'
        ]);

        $post->title = $request->post_title;
        $post->content = $request->post_content;
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    // Delete the specified post
    public function destroy(Post $post)
    {
        if ($post->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
