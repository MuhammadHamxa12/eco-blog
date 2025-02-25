<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Display all articles for the logged-in user
    public function index()
    {
        $articles = auth()->user()->articles;
        return view('articles.index', compact('articles'));
    }

    // Show the form to create a new article
    public function create()
    {
        return view('articles.create');
    }

    // Store a newly created article
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
        ]);

        auth()->user()->articles()->create($request->all());
        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }

    // Show the form to edit an article
    public function edit(Article $article)
    {
        if ($article->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
        return view('articles.edit', compact('article'));
    }

    // Update the specified article
    public function update(Request $request, Article $article)
    {
        if ($article->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
        ]);

        $article->update($request->all());
        return redirect()->route('articles.index')->with('success', 'Article updated successfully.');
    }

    // Delete the specified article
    public function destroy(Article $article)
    {
        if ($article->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
    }
}
