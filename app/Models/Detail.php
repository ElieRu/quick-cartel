<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = ["article_id", "qtte", "prixUnitaire", "prixTotal", "devise", "vente_id", "commande_id", "reservation_id"];
}
