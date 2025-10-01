<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - Mon Premier Site Laravel</title>
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
@section('title', 'À propos')
@section('content')
    <div class="container">
        
        <h1>À propos de nous</h1>
        
        <p>Bienvenue sur ma première page Laravel ! 🎉</p>
        
        <p>Cette page a été créée pour apprendre les bases de Laravel :</p>
        
        <ul>
            <li>✅ Création de routes</li>
            <li>✅ Création de vues (templates)</li>
            <li>✅ Navigation entre les pages</li>
            <li>✅ Création d'un layout réutilisable</li>
            <li>✅ Utilisation des sections Blade</li>
            <li>✅ Passage de données dynamiques aux vues</li>
            <li>✅ Création de modèles et de migrations</li>
            <li>✅ Formulaire d'ajout d'article</li>
        </ul>
        
        <p>Laravel est un framework PHP fantastique pour créer des applications web modernes et élégantes.</p>
        
        <div style="background-color: #e7f3ff; padding: 15px; border-radius: 5px; margin-top: 20px;">
            <strong>💡 Astuce :</strong> Cette page utilise le moteur de template Blade de Laravel. 
            Le fichier se trouve dans <code>resources/views/a-propos.blade.php</code>
        </div>
    </div>
@endsection
</body>
</html>