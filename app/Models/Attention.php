<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pet;
use App\Models\Service;
use App\Models\Personal;

class Attention extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_id',
        'service_id',
        'personal_id',
        'fecha_hora',
        'titulo',
        'descripcion'
    ];

    protected $casts = [
        'fecha_hora' => 'datetime',
    ];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }
}
