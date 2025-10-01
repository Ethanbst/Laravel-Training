@extends('layout')

@section('title', 'Modifier un Article')

@section('content')
    <div class="container">
        <h1>✏️ Modifier l'article</h1>
        
        <form method="POST" action="/articles/{{ $article->id }}/modifier">
            @csrf
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="titre" style="display: block; margin-bottom: 5px; font-weight: bold;">Titre de l'article :</label>
                <input type="text" id="titre" name="titre" value="{{ $article->titre }}" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
            </div>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="auteur" style="display: block; margin-bottom: 5px; font-weight: bold;">Auteur :</label>
                <input type="text" id="auteur" name="auteur" value="{{ $article->auteur }}" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
            </div>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="contenu" style="display: block; margin-bottom: 5px; font-weight: bold;">Contenu :</label>
                <textarea id="contenu" name="contenu" rows="6" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">{{ $article->contenu }}</textarea>
            </div>

            <button type="submit" style="background-color: #28a745; color: white; padding: 12px 30px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">📝 Modifier l'article</button>
            <a href="/articles" style="margin-left: 10px; color: #6c757d;">Annuler</a>
        </form>
    </div>
@endsection