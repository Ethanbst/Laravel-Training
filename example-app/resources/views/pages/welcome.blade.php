@extends('layouts.layout')

@section('title', 'Accueil')

@section('content')
    <div class="container">
        <h1>🏠 Bienvenue sur mon site Laravel !</h1>
        
        <p>Bonjour et bienvenue sur mon premier site web développé avec Laravel !</p>
        
        <p>Ce site présente mes apprentissages en développement web avec le framework Laravel.</p>
        
        <div style="margin-top: 30px;">
            <h2>🚀 Navigation</h2>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li><a href="/a-propos" style="color: #007bff;">À propos</a> - Découvrez qui je suis</li>
                <li><a href="/contact" style="color: #007bff;">Contact</a> - Comment me joindre</li>
                <li><a href="/articles" style="color: #007bff;">Articles</a> - Mes derniers articles</li>
            </ul>
        </div>
        
        @auth
            <div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-top: 20px; border-left: 4px solid #28a745;">
                <strong>👋 Bonjour {{ Auth::user()->name }} !</strong><br>
                Vous êtes connecté(e). Vous pouvez maintenant <a href="/articles/nouveau" style="color: #155724; text-decoration: underline;">créer des articles</a>.
            </div>
        @else
            <div style="background-color: #e7f3ff; padding: 15px; border-radius: 5px; margin-top: 20px; border-left: 4px solid #007bff;">
                <strong>ℹ️ Information :</strong> 
                <a href="{{ route('login') }}" style="color: #007bff;">Connectez-vous</a> ou 
                <a href="{{ route('register') }}" style="color: #007bff;">inscrivez-vous</a> pour créer et gérer des articles.
            </div>
        @endauth
    </div>
@endsection