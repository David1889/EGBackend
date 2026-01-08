<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\Attention;

class Personal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'rol_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'rol_id');
    }

    public function attentions()
    {
        return $this->hasMany(Attention::class);
    }
}
