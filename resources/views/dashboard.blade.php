<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <!-- Centered Welcome Message -->
        <div class="text-center">
            <h1>Welcome, {{ auth()->user()->name }}</h1>
            <p class="lead">Manage your posts and articles here.</p>
        </div>

        <div class="row mt-4">
            <!-- My Posts Card -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">My Posts</h5>
                        <p class="card-text">Create, edit, or delete your blog posts.</p>
                        <a href="{{ route('posts.index') }}" class="btn btn-primary">Manage Posts</a>
                    </div>
                </div>
            </div>

            <!-- My Articles Card -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">My Articles</h5>
                        <p class="card-text">Create, edit, or delete your articles.</p>
                        <a href="{{ route('articles.index') }}" class="btn btn-success">Manage Articles</a>
                    </div>
                </div>
            </div>

            <!-- View Blog Card -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">View Blog</h5>
                        <p class="card-text">Explore all blog posts.</p>
                        <a href="{{ route('blog') }}" class="btn btn-info">View Blog</a>
                    </div>
                </div>
            </div>

            <!-- View Articles Card -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">View Articles</h5>
                        <p class="card-text">Explore all articles.</p>
                        <a href="{{ route('article') }}" class="btn btn-warning">View Articles</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logout Footer -->
        <footer class="bg-light py-4 mt-5 fixed-bottom shadow">
            <div class="container text-center">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-lg px-4">
                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                    </button>
                </form>
            </div>
        </footer>

    </div>
</body>

</html>
