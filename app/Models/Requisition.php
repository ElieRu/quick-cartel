<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    use HasFactory;

    protected $fillable = ['article_id', 'qtte', 'date', 'montant', 'statut', 'devise', 'boutique_id', 'fournisseur_id'];
}
