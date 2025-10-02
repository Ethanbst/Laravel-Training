@extends('layouts.layout')

@section('title', 'Supprimer un Article')

@section('content')
    <div class="container">
        <h1>🗑️ Supprimer un article</h1>

        <div style="background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px; border-left: 4px solid #dc3545;">
            <strong>⚠️ Attention !</strong> Vous êtes sur le point de supprimer définitivement cet article.
        </div>

        <form method="POST" action="/articles/{{ $article->id }}/supprimer">
            @csrf
            <div class="form-group" style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Titre de l'article :</label>
                <p style="background-color: #f8f9fa; padding: 10px; border-radius: 5px;">{{ $article->titre }}</p>
            </div>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Auteur :</label>
                <p style="background-color: #f8f9fa; padding: 10px; border-radius: 5px;">{{ $article->auteur }}</p>
            </div>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Contenu :</label>
                <p style="background-color: #f8f9fa; padding: 10px; border-radius: 5px;">{{ $article->contenu }}</p>
            </div>

            <button type="submit" style="background-color: #dc3545; color: white; padding: 12px 30px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">🗑️ Supprimer l'article</button>
            <a href="/articles" style="margin-left: 10px; color: #6c757d; padding: 12px 20px; text-decoration: none; border: 1px solid #6c757d; border-radius: 5px; display: inline-block;">Annuler</a>
        </form>
    </div>
@endsection