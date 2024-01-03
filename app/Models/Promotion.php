<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'dateDebut', 'dateFin', 'type', 'pourcentage', 'montantReduction', 'description', 'boutique_id', 'article_id'];
}
