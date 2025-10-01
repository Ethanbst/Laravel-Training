<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Articles - Mon Premier Site Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 3px solid #007bff;
            padding-bottom: 10px;
        }
        .nav {
            margin-bottom: 20px;
        }
        .nav a {
            text-decoration: none;
            color: #007bff;
            margin-right: 15px;
            padding: 5px 10px;
            border: 1px solid #007bff;
            border-radius: 5px;
        }
        .nav a:hover {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
@extends('layout')
@section('title', 'Liste des Articles')
@section('content')
    <div class="container">
        
        <h1>📚 Liste des Articles</h1>
        
        <div style="margin-bottom: 20px;">
            <a href="/articles/nouveau" style="background-color: #28a745; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block;">
                ➕ Ajouter un nouvel article
            </a>
        </div>
        
        <p>Voici la liste de tous nos articles :</p>
        
        @if($articles->count() > 0) <!-- Vérifie s'il y a des articles -->
            <ul>
                @foreach($articles as $article)
                    <li>
                        <h2>{{ $article->titre }}</h2>
                        <p>{{ $article->contenu }}</p>
                        <p><em>Écrit par {{ $article->auteur }}</em></p>
                    </li>
                @endforeach
            </ul>
        @else <!-- Si aucun article n'est trouvé -->
            <p>Aucun article trouvé.</p>
        @endif

    </div>
@endsection
</body>
</html>