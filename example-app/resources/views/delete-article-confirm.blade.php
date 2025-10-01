<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Article - Mon Premier Site Laravel</title>
</head>
<body>
@extends('layout')
@section('title', 'Créer un Article')
@section('content')
    <div class="container">

        <h1>✏️ Supprimer un article</h1>

        <form method="POST" action="/articles/{{ $article->id }}/supprimer">
            @csrf
            <div class="form-group">
                <label for="titre">Titre de l'article :</label>
                {{ $article->titre }}
            </div>
            
            <div class="form-group">
                <label for="auteur">Auteur :</label>
                {{ $article->auteur }}
            </div>
            
            <div class="form-group">
                <label for="contenu">Contenu :</label>
            {{ $article->contenu }}
            </div>

            <button type="submit">🗑️ Supprimer l'article</button>
            <a href="/articles" style="margin-left: 10px; color: #6c757d;">Annuler</a>
        </form>
    </div>
@endsection
</body>
</html>
</html>