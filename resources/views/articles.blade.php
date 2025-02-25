<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-2">
        <div class="card shadow-lg p-2">
            <!-- Heading and Back Button -->
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="text-dark m-0">Articles</h1>
                <a href="{{ url('/dashboard') }}" class="btn btn-success text-white">← Dashboard</a>
            </div>
        </div>
        <div class="row mt-2">
            @foreach ($articles as $article)
                <div class="col-md-4 mb-4"> <!-- Each article takes 4 columns (3 article per row) -->
                    <div class="card">
                        <div class="card-body">
                            <h2>{{ $article->title }}</h2>
                            <p>{{ $article->content }}</p>
                            <p class="text-muted">By: {{ $article->author }}</p>
                            <p class="text-muted">Posted by: {{ $article->user->name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
