<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Personal;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];

    public function personals()
    {
        return $this->hasMany(Personal::class, 'rol_id');
    }
}
