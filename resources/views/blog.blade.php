<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-2">
        <div class="card shadow-lg p-2">
            <!-- Heading and Back Button -->
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="text-dark m-0">Blog Posts</h1>
                <a href="{{ url('/dashboard') }}" class="btn btn-success text-white">← Dashboard</a>
            </div>
        </div>
        <div class="row mt-2">
            @foreach ($posts as $post)
                <div class="col-md-4 mb-4"> <!-- Each post takes 4 columns (3 posts per row) -->
                    <div class="card">
                        <div class="card-body">
                            <h2>{{ $post->title }}</h2>
                            <p>{{ Str::limit($post->content, 100) }}</p> <!-- Limit content to 100 characters -->
                            <p class="text-muted">Posted by: {{ $post->user->name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
