@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="text-dark m-0">My Articles</h1>
                <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">+ Create New Article</a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Author</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $index => $article)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $article->title }}</td>
                                <td>{{ Str::limit($article->content, 50) }}</td>
                                <td>{{ $article->author }}</td>
                                <td>
                                    <a href="{{ route('articles.edit', $article->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
