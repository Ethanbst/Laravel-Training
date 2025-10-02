<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    // Afficher la liste des articles
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    // Afficher le formulaire d'ajout
    public function create()
    {
        return view('articles.create');
    }

    // Sauvegarder un nouvel article
    public function store(Request $request)
    {
        Article::create([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'auteur' => Auth::user()->name  // Utilise le nom de l'utilisateur connecté
        ]);
        
        return redirect('/articles')->with('success', 'Article ajouté avec succès !');
    }

    // Afficher le formulaire de modification
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    // Mettre à jour un article
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'auteur' => Auth::user()->name  // Utilise le nom de l'utilisateur connecté
        ]);
        
        return redirect('/articles')->with('success', 'Article modifié avec succès !');
    }

    // Afficher la confirmation de suppression
    public function confirmDelete($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.delete-confirm', compact('article'));
    }

    // Supprimer un article
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        
        return redirect('/articles')->with('success', 'Article supprimé avec succès !');
    }
}
