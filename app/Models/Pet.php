<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Attention;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'nombre',
        'foto',
        'raza',
        'color',
        'fecha_de_nac',
        'fecha_muerte'
    ];

    protected $casts = [
        'fecha_de_nac' => 'date',
        'fecha_muerte' => 'date',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'cliente_id');
    }

    public function attentions()
    {
        return $this->hasMany(Attention::class);
    }

    public function estaViva(): bool
    {
        return is_null($this->fecha_muerte);
    }

    public function scopeVivas($query)
    {
        return $query->whereNull('fecha_muerte');
    }
}
