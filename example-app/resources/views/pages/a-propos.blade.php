@extends('layouts.layout')

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
            Le fichier se trouve dans <code>resources/views/pages/a-propos.blade.php</code>
        </div>
    </div>
@endsection