<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instalacion_tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'estatus',
        'instalacion',
        'instalacion_en',
    ];
    public function propiedad()
    {
        return $this->belongsToMany(Propiedad::class, 'instalacions_propiedads','propiedad_id', 'instalacion_id');
    }
    public function proyecto()
    {
        return $this->belongsToMany(Proyecto::class, 'instalacion_tag_proyecto','proyecto_id', 'instalacion_id');
    }
}
