<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Champs autorisés pour la modification en masse
    protected $fillable = [
        'titre',
        'contenu', 
        'auteur'
    ];
}
