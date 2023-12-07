<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;

    protected $fillable = ['article_id', 'devise', 'qtte', 'client_id', 'prixTotal', 'prix', 'user_id', 'numero', 'boutique_id'];
}
