@extends('layout')

@section('title', 'Liste des Articles')

@section('content')
    <div class="container">
        <h1>📚 Liste des Articles</h1>
        
        @auth
            <div style="margin-bottom: 20px;">
                <a href="/articles/nouveau" style="background-color: #28a745; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block;">
                    ➕ Ajouter un nouvel article
                </a>
            </div>
        @else
            <div style="background-color: #e7f3ff; padding: 15px; border-radius: 5px; margin-bottom: 20px; border-left: 4px solid #007bff;">
                <strong>ℹ️ Information :</strong> 
                <a href="{{ route('login') }}">Connectez-vous</a> pour ajouter, modifier ou supprimer des articles.
            </div>
        @endauth
        @if(session('success'))
            <div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px; border-left: 4px solid #28a745;">
                <strong>✅ Succès !</strong> {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div style="background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px; border-left: 4px solid #dc3545;">
                <strong>❌ Erreur !</strong> {{ session('error') }}
            </div>
        @endif
        
        <p>Voici la liste de tous nos articles :</p>
        
        @if($articles->count() > 0) <!-- Vérifie s'il y a des articles -->
            <ul>
                @foreach($articles as $article)
                    <li style="border-bottom: 1px solid #eee; padding: 15px 0;">
                        <h2>{{ $article->titre }}</h2>
                        <p>{{ $article->contenu }}</p>
                        <p><em>Écrit par {{ $article->auteur }}</em></p>
                        
                        @auth
                            <div style="margin-top: 10px;">
                                <a href="/articles/{{ $article->id }}/modifier" style="color: #007bff; margin-right: 15px;">✏️ Modifier</a>
                                <a href="/articles/{{ $article->id }}/supprimer" style="color: #dc3545;">🗑️ Supprimer</a>
                            </div>
                        @endauth
                    </li>
                @endforeach
            </ul>
        @else <!-- Si aucun article n'est trouvé -->
            <p>Aucun article trouvé.</p>
        @endif
    </div>
@endsection