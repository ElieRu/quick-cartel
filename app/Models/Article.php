<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    public function descriptions()
    {
        return $this->hasMany(Description::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    use HasFactory;

    protected $fillable = ['nom', 'categorie', 'prix', 'user_id', 'qtte', 'categorie_id', 'specification_id', 'monetaire_id', 'qtteEnReservation', 'boutique_id', 'description', 'devise'];
}
