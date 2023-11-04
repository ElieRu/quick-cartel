<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'email', 'phone', 'img', 'ure', 'description', 'adresse_id', 'user_id'];
}
