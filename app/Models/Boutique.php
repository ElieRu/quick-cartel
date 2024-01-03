<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Boutique extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nom', 'email', 'img', 'ure', 'description', 'adresse_id', 'user_id'];
}
