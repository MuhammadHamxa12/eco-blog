@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-4">
                    <div class="d-flex card-header shadow-lg justify-content-between align-items-center mb-3">
                        <h4 class="mb-0">Create New Post</h4>
                        <a href="{{ route('posts.index') }}" class="btn btn-secondary">← Back to Post</a>
                    </div>
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="post_title" class="form-label fw-bold">Title</label>
                            <input type="text" name="post_title" id="post_title"
                                class="@error('post_title') is-invalid @enderror form-control form-control-lg" required
                                placeholder="Enter post title">
                            @error('post_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="post_content" class="form-label fw-bold">Content</label>
                            <textarea name="post_content" id="post_content"
                                class="@error('post_content') is-invalid @enderror form-control form-control-lg" rows="3"
                                placeholder="Write your content here..." required></textarea>
                            @error('post_content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Create Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
