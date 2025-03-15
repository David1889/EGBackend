<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'ciudad',
        'direccion',
        'telefono'
    ];

    public function pets(){
        return $this->hasMany('App\Pet');
    }
}
