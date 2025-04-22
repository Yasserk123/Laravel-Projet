@extends('layouts.admin')

@section('title', 'Gestion des articles')

@section('content')
    <div class="container">
        <div class="alert alert-info">
            <b>Mode administration</b> - Cet espace est protégé par un middleware
        </div>
        <h1 class="mb-4">Gestion des articles</h1>
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Liste des articles</h2>
            </div>

            <div class="card-body">


                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Titre</th>
                            <th>Auteur</th>
                            <th>Catégorie</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{ $article['id'] }}</td>
                                <td>{{ $article['title'] }}</td>
                                <td>{{ $article['author'] }}</td>
                                <td>
                                    <span class="badge bg-primary">
                                        {{ $article['category'] }}
                                    </span>
                                </td>
                                <td>{{ date('d/m/Y', strtotime($article['published_at'])) }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('admin.articles.show', $article['id']) }}?admin=1"
                                            class="btn btn-sm btn-info">
                                            Voir
                                        </a>
                                        <a href="{{ route('admin.articles.edit', $article['id']) }}?admin=1"
                                            class="btn btn-sm btn-warning">
                                            Modifier
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection