<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Blog IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-black shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-light" href="{{ route('home') }}">Mini Blog IT</a>

            <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-light" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('home') }}">Articles</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown">
                            Catégories
                        </a>
                        <ul class="dropdown-menu">
                            @foreach(App\Data\ArticlesData::getCategories() as $category)
                                <li>
                                    <a class="dropdown-item" href="{{ route('blog.category', $category) }}">
                                        {{ $category }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('blog.about') }}">À propos</a>
                    </li>
                </ul>

                <a href="{{ route('admin.articles.index') }}?admin=1" class="btn btn-outline-danger">
                    Espace Admin
                </a>
            </div>
        </div>
    </nav>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <main class="container my-5 flex-grow-1">
        @yield('content')
    </main>

    <footer class="bg-black text-center text-light py-3 mt-auto">
        <div class="container">
            © 2025 Mini Blog IT - Tous droits réservés
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>