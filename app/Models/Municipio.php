<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $fillable = [
        'municipio',
        'estado_id',
    ];

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
    
    public function sector()
    {
        return $this->hasMany(Sector::class, 'municipio_id', 'id');
    }
}