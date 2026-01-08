<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attention;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tipo',
        'precio'
    ];

    public function attentions()
    {
        return $this->hasMany(Attention::class);
    }
}
