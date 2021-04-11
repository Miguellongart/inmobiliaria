<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'estado',
        'pais_id',
    ];
    
    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }

    public function municipios()
    {
        return $this->hasMany(Estado::class, 'estado_id', 'id');
    }
}
