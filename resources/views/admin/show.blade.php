@extends('layouts.admin')

@section('title', 'Détail de l\'article')

@section('header', 'Détail de l\'article')

@section('content')
    <div class="container">
        <div class="alert alert-info">
            <b>Mode administration</b> - Cet espace est protégé par un middleware
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mb-4">Article #{{ $article['id'] }}</h1>
            <a href="{{ route('admin.articles.edit', $article['id']) }}?admin=1" class="btn btn-sm btn-primary">Éditer</a>
            <a href="{{ route('blog.show', $article['slug']) }}?admin=1" class="btn btn-outline-info ms-2" target="_blank">
                Voir sur le site
            </a>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">{{ $article['title'] }}</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <strong>ID :</strong> {{ $article['id'] }}
                </div>
                <div class="mb-3">
                    <strong>Slug :</strong> {{ $article['slug'] }}
                </div>
                <div class="mb-3">
                    <strong>Catégorie :</strong> {{ $article['category'] }}
                </div>
                <div class="mb-3">
                    <strong>Auteur :</strong> {{ $article['author'] }}
                </div>
                <div class="mb-3">
                    <strong>Date de publication :</strong> {{ date('d/m/Y', strtotime($article['published_at'])) }}
                </div>
                <div class="mb-3">
                    <strong>Résumé :</strong> {{ $article['summary'] }}
                </div>
                <div class="mb-3">
                    <strong>Tags :</strong>
                    @foreach($article['tags'] as $tag)
                        <span class="badge bg-secondary">{{ $tag }}</span>
                    @endforeach
                </div>
                <div class="mb-3">
                    <strong>Contenu :</strong>
                    <div class="border p-3 mt-2 bg-light">
                        {!! nl2br(e($article['content'])) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('admin.articles.index') }}?admin=1" class="btn btn-outline-secondary">
                &larr; Retour à la liste
            </a>

        </div>
    </div>
@endsection