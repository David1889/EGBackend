<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'nombre'
    ];

    public function personals(){
        return $this->hasMany('App\Personal');
    }
}
