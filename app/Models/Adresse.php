<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    use HasFactory;

    protected $fillable = ['ville', 'commune', 'quartier', 'avenue', 'user_id', 'boutique_id', 'fournisseur_id'];
}
