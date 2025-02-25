@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-4">
                    <div class="d-flex card-header shadow-lg justify-content-between align-items-center mb-3">
                        <h4 class="mb-0">Create New Article</h4>
                        <a href="{{ route('articles.index') }}" class="btn btn-secondary">← Back to Articles</a>
                    </div>
                    <form action="{{ route('articles.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="title" class="form-label fw-bold">Title</label>
                            <input type="text" name="title" id="title"
                                class="@error('title') is-invalid @enderror form-control form-control-lg" required
                                placeholder="Enter article title" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="content" class="form-label fw-bold">Content</label>
                            <textarea name="content" id="content" class="@error('content') is-invalid @enderror form-control form-control-lg"
                                rows="3" placeholder="Write your content here..." required></textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="author" class="form-label fw-bold">Author</label>
                            <input type="text" name="author" id="author"
                                class="@error('author') is-invalid @enderror form-control form-control-lg"
                                placeholder="Enter a author name" required>
                            @error('author')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Create Article</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
