<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Article - Mon Premier Site Laravel</title>
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
            border-bottom: 3px solid #28a745;
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
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
@extends('layout')
@section('title', 'Créer un Article')
@section('content')
    <div class="container">

        <h1>✏️ Créer un nouvel article</h1>
        
        <form method="POST" action="/articles">
            @csrf
            <div class="form-group">
                <label for="titre">Titre de l'article :</label>
                <input type="text" id="titre" name="titre" required>
            </div>
            
            <div class="form-group">
                <label for="auteur">Auteur :</label>
                <input type="text" id="auteur" name="auteur" required>
            </div>
            
            <div class="form-group">
                <label for="contenu">Contenu :</label>
                <textarea id="contenu" name="contenu" rows="6" required></textarea>
            </div>
            
            <button type="submit">📝 Créer l'article</button>
            <a href="/articles" style="margin-left: 10px; color: #6c757d;">Annuler</a>
        </form>
    </div>
@endsection
</body>
</html>