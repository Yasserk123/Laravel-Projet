@extends('layouts.app')

@section('title', $article['title'])

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <h1 class="card-title mb-4">{{ $article['title'] }}</h1>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="text-muted">
                            Par {{ $article['author'] }} -
                            {{ date('d/m/Y', strtotime($article['published_at'])) }}
                        </div>
                        <span class="badge bg-primary">
                            {{ $article['category'] }}
                        </span>
                    </div>

                    <div class="mb-4">
                        @foreach($article['tags'] as $tag)
                            <span class="badge bg-secondary me-1">{{ $tag }}</span>
                        @endforeach
                    </div>

                    <div class="mb-4">
                        @foreach(explode("\n", $article['content']) as $paragraph)
                            <p class="mb-3">{{ $paragraph }}</p>
                        @endforeach
                    </div>

                    <a href="{{ route('home') }}" class="btn btn-outline-primary">
                        ← Retour à la liste
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection