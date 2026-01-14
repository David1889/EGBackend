<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pet;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'ciudad',
        'direccion',
        'telefono'
    ];

    public function pets()
    {
        return $this->hasMany(Pet::class, 'cliente_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
