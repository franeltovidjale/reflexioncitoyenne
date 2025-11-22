<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposition extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_structure',
        'nom_structure',
        'nom_contact',
        'email',
        'type_soutien',
        'description',
        'statut',
    ];
}
