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

# Ajout d'article

Route::get('/articles/nouveau', function () { # Route pour afficher le formulaire d'ajout d'article
    return view('add-article');
});

Route::post('articles', function () { # Route pour gérer la soumission du formulaire
    $article = new App\Models\Article();
    $article->titre = request('titre');
    $article->contenu = request('contenu');
    $article->auteur = request('auteur');
    $article->save();

    return redirect('/articles');
});

# Suppression d'article

Route::get('/articles/{id}/supprimer', function ($id) { # Route pour afficher le formulaire de suppression d'article
    $article = App\Models\Article::find($id);
    if (!$article) {
        return redirect('/articles')->with('error', 'Article non trouvé.');
    }
    return view('delete-article-confirm', ['article' => $article]);
});

Route::post('/articles/{id}/supprimer', function ($id) { # Route pour gérer la soumission du formulaire de suppression
    $article = App\Models\Article::find($id);
    if ($article) {
        $article->delete();
        return redirect('/articles')->with('success', 'Article supprimé avec succès.');
    }
    return redirect('/articles')->with('error', 'Article non trouvé.');
});

# Modification d'article

Route::get('articles/{id}/modifier', function ($id) { # Route pour afficher le formulaire de modification d'article
    $article = App\Models\Article::find($id);
    if (!$article) {
        return redirect('/articles')->with('error', 'Article non trouvé.');
    }
    return view('edit-article', ['article' => $article]);
});

Route::post('/articles/{id}/modifier', function ($id) { # Route pour gérer la soumission du formulaire de modification
    $article = App\Models\Article::find($id);
    if ($article) {
        $article->titre = request('titre');
        $article->contenu = request('contenu');
        $article->auteur = request('auteur');
        $article->save();
        return redirect('/articles')->with('success', 'Article modifié avec succès.');
    }
    return redirect('/articles')->with('error', 'Article non trouvé.');
});