<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Article - Mon Premier Site Laravel</title>
</head>
<body>
@extends('layout')
@section('title', 'Modifier un Article')
@section('content')
    <div class="container">

        <h1>✏️ Modifier l'article</h1>
        
        <form method="POST" action="/articles/{{ $article->id }}/modifier">
            @csrf
            <div class="form-group">
                <label for="titre">Titre de l'article :</label>
                <input type="text" id="titre" name="titre" value="{{ $article->titre }}" required>
            </div>
            
            <div class="form-group">
                <label for="auteur">Auteur :</label>
                <input type="text" id="auteur" name="auteur" value="{{ $article->auteur }}" required>
            </div>
            
            <div class="form-group">
                <label for="contenu">Contenu :</label>
                <textarea id="contenu" name="contenu" rows="6" required>{{ $article->contenu }}</textarea>
            </div>

            <button type="submit">📝 Modifier l'article</button>
            <a href="/articles" style="margin-left: 10px; color: #6c757d;">Annuler</a>
        </form>
    </div>
@endsection
</body>
</html>