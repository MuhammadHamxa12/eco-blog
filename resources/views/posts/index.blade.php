@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="text-dark m-0">My Posts</h1>
                <a href="{{ route('posts.create') }}" class="btn btn-success text-white">+ Create New Post</a>
            </div>


            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $index => $post)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ Str::limit($post->content, 50) }}</td>
                                <td>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
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
