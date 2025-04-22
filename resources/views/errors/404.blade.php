@extends('layouts.app')

@section('title', 'Page non trouvée')

@section('content')
    <div class="container text-center py-5">
        <h1 class="display-1">404</h1>
        <div class="mb-4">
            <h2>Page non trouvée</h2>
            <p class="lead">La page que vous recherchez semble introuvable.</p>
        </div>

        <img src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.2/svg/1f914.svg" alt="Emoji pensif" width="100"
            class="mb-4">

        <div class="mt-4">
            <p>Voici quelques suggestions :</p>
            <ul class="list-unstyled">
                <li>Vérifiez l'URL pour des erreurs de frappe</li>
                <li>Retournez à la <a href="{{ route('home') }}">page d'accueil</a></li>
                <li>Essayez de rechercher ce que vous cherchiez</li>
            </ul>
        </div>

        <div class="mt-5">
            <a href="{{ route('home') }}" class="btn btn-primary">Retour à l'accueil</a>
        </div>
    </div>
@endsection