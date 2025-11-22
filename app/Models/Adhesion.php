<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adhesion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'date_naissance',
        'ville_pays',
        'domaine_activite',
        'domaines_interet',
        'motivation',
        'acceptation',
        'statut',
    ];

    protected $casts = [
        'date_naissance' => 'date',
        'acceptation' => 'boolean',
    ];
}
