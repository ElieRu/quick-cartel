<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = ['article_id', 'qtte', 'client_id', 'numero', 'devise', 'prixTotal', 'dateDisponible', 'prix', 'boutique_id'];
    
}
