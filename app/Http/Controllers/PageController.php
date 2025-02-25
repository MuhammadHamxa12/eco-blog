<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Landing Page
    public function landing()
    {
        return view('landing');
    }

    // Blog Page (Displays all posts)
    public function blog()
    {
        $posts = Post::with('user')->latest()->get();
        return view('blog', compact('posts'));
    }

    // Articles Page (Displays all articles)
    public function articles()
    {
        $articles = Article::with('user')->latest()->get();
        return view('articles', compact('articles'));
    }

    // Dashboard Page (For logged-in users)
    public function dashboard()
    {
        return view('dashboard');
    }
}
