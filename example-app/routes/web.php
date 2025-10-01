<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Votre première page personnalisée
Route::get('/a-propos', function () {
    return view('a-propos');
});

// Une autre page avec des données
Route::get('/contact', function () {
    return view('contact', [
        'titre' => 'Contactez-nous',
        'email' => 'contact@monsite.com'
    ]);
});

Route::get('/page', function () {
    return view('page', [
        'titre' => 'Ma page personnalisée',
        'texte1' => 'Ceci est le texte 1.',
        'texte2' => 'Ceci est le texte 2.'
    ]);
});

Route::get('/articles', function () {
    $articles = App\Models\Article::all(); #Récupère tous les articles depuis la base de données
    return view('articles', ['articles' => $articles]); #Passe les articles à la vue
});

Route::get('/articles/nouveau', function () {
    return view('add-article');
});

Route::post('articles', function () {
    $article = new App\Models\Article();
    $article->titre = request('titre');
    $article->contenu = request('contenu');
    $article->auteur = request('auteur');
    $article->save();

    return redirect('/articles');
});