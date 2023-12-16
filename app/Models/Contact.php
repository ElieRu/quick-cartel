<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['phone', 'type', 'user_id', 'boutique_id', 'client_id', 'fournisseur_id'];
}
