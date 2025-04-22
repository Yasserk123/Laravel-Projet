@extends('layouts.app')

@section('title', isset($category) ? "Catégorie: $category" : 'Mini Blog IT')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="mb-4 text-center">
                {{ isset($category) ? "Articles dans la catégorie: $category" : 'Tous les articles' }}
            </h1>

            @if(count($articles) > 0)
                @foreach($articles as $article)
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title fs-3">{{ $article['title'] }}</h2>
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <span class="badge bg-primary">{{ $article['category'] }}</span>
                                <small class="text-muted">
                                    Publié le {{ date('d/m/Y', strtotime($article['published_at'])) }}
                                    par {{ $article['author'] }}
                                </small>
                            </div>
                            <p class="card-text text-muted mb-3">{{ $article['summary'] }}</p>
                            <div class="mb-3 d-flex flex-wrap gap-2">
                                @foreach($article['tags'] as $tag)
                                    <span class="badge bg-secondary">{{ $tag }}</span>
                                @endforeach
                            </div>
                            <a href="{{ route('blog.show', $article['slug']) }}" class="btn btn-outline-primary">
                                Lire la suite
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-info text-center">Aucun article trouvé.</div>
            @endif
        </div>
    </div>
@endsection