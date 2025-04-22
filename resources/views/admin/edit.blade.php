@extends('layouts.admin')

@section('title', 'Éditer l\'article')

@section('header', 'Éditer l\'article')

@section('content')
<div class="container">
    <div class="alert alert-info">
        <b>Mode administration</b> - Cet espace est protégé par un middleware
    </div>
    <h1 class="mb-4">Modifier l'article #{{ $article['id'] }} </h1>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="#">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $article['title'] }}" required>
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $article['slug'] }}" required>
                </div>

                <div class="mb-3">
                    <label for="summary" class="form-label">Résumé</label>
                    <textarea class="form-control" id="summary" name="summary" rows="2" required>{{ $article['summary'] }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Contenu</label>
                    <textarea class="form-control" id="content" name="content" rows="10" required>{{ $article['content'] }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Catégorie</label>
                    <select class="form-select" id="category" name="category" required>
                        @foreach($categories as $cat)
                            <option value="{{ $cat }}" {{ $article['category'] === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">Auteur</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ $article['author'] }}" required>
                </div>

                <div class="mb-3">
                    <label for="published_at" class="form-label">Date de publication</label>
                    <input type="date" class="form-control" id="published_at" name="published_at" value="{{ date('Y-m-d', strtotime($article['published_at'])) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tags</label>
                    <div class="row">
                        @foreach($tags as $tag)
                            <div class="col-md-3 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="tag_{{ $tag }}" name="tags[]" value="{{ $tag }}"
                                        {{ in_array($tag, $article['tags']) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="tag_{{ $tag }}">{{ $tag }}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.articles.show', $article['id']) }}?admin=1" class="btn btn-outline-secondary">Annuler</a>
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection