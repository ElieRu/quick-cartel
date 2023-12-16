<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lien extends Model
{
    use HasFactory;

    protected $fillable = ['site', 'lien', 'boutique_id', 'fournisseur_id'];

}
