<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pets';

    protected $fillable = [
        'cliente_id',
        'nombre',
        'foto',
        'raza',
        'color',
        'fecha_de_nac',
        'fecha_muerte'
    ];

}
