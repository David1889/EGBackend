<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attention extends Model
{
    protected $table = 'attentions';

    protected $fillable = [
        'pet_id',
        'service_id',
        'personal_id',
        'fecha_hora',
        'titulo',
        'descripcion'
    ];

    public function pet(){
        $this->belongsTo('App\Pet');
    }

    public function service(){
        $this->belongsTo('App\Service');
    }

    public function personal(){
        $this->belongsTo('App\Personal');
    }
    
}
