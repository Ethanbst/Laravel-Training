<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

// Route d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Vos routes publiques (pas besoin d'être connecté)
Route::get('/a-propos', function () {
    return view('a-propos');
});

Route::get('/contact', function () {
    $titre = "Contactez-nous";
    $email = "contact@monsite.com";
    return view('contact', compact('titre', 'email'));
});

Route::get('/articles', [ArticleController::class, 'index']);

// Routes protégées par l'authentification
Route::middleware('auth')->group(function () {
    // Tableau de bord
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Profil utilisateur
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Gestion des articles (avec contrôleur)
    Route::get('/articles/nouveau', [ArticleController::class, 'create']);
    Route::post('/articles', [ArticleController::class, 'store']);
    Route::get('/articles/{id}/modifier', [ArticleController::class, 'edit']);
    Route::post('/articles/{id}/modifier', [ArticleController::class, 'update']);
    Route::get('/articles/{id}/supprimer', [ArticleController::class, 'confirmDelete']);
    Route::post('/articles/{id}/supprimer', [ArticleController::class, 'destroy']);
});

require __DIR__.'/auth.php';
