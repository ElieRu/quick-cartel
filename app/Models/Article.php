<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'categorie', 'prix', 'user_id', 'qtte', 'categorie_id', 'specification_id', 'monetaire_id', 'boutique_id', 'description', 'devise'];
}
