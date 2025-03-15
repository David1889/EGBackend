<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'personal';

    protected $fillable = [
        'email',
        'clave',
        'rol_id'
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function attentions(){
        return $this->hasMany('App\Attention');
    }
}
