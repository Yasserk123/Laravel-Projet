@extends('layouts.app')

@section('title', 'À propos - Mini Blog IT')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="mb-4">À propos de Mini Blog IT</h1>

            <div class="card">
                <div class="card-body">
                    <p>Mini Blog IT est un projet d'atelier Laravel qui permet de créer un mini blog technique sans utiliser
                        de base de données.</p>

                    <p>Ce projet utilise les fonctionnalités suivantes de Laravel :</p>
                    <ul>
                        <li>Routes et routes nommées</li>
                        <li>Contrôleurs</li>
                        <li>Middlewares</li>
                        <li>Vues et layouts Blade</li>
                        <li>Groupes de routes</li>
                        <li>Injection de dépendances</li>
                    </ul>

                    <p>Les articles du blog sont stockés dans une classe PHP statique, ce qui permet de manipuler les
                        données sans base de données.</p>

                    <h3 class="mt-4">Structure du projet</h3>
                    <ul>
                        <li><strong>Front-office</strong> : Partie publique du blog avec la liste des articles, les détails
                            des articles et le filtrage par catégorie.</li>
                        <li><strong>Back-office</strong> : Espace d'administration protégé par un middleware pour gérer les
                            articles.</li>
                    </ul>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('home') }}" class="btn btn-outline-primary">
                    &larr; Retour à l'accueil
                </a>
            </div>
        </div>
    </div>
@endsection