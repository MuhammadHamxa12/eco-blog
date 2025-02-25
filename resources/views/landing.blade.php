<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco-Friendly Living</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container d-flex flex-column align-items-center justify-content-center text-center vh-100">
        <div class="card shadow-lg p-5 border-0 rounded-4" style="max-width: 600px; background-color: #f8f9fa;">
            <h2 class="fw-bold text-primary">Welcome to Eco-Friendly Living</h2>
            <p class="lead text-muted">Learn how to live sustainably and protect the planet.</p>
            <div class="mt-4 d-flex justify-content-center gap-4">
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4">Login</a>
                <a href="{{ route('register') }}" class="btn btn-info  btn-lg px-4">Register</a>
            </div>
        </div>
    </div>
</body>

</html>
