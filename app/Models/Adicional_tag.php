<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adicional_tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'estatus',
        'adicional',
        'adicional_en',
    ];

    public function propiedad()
    {
        return $this->belongsToMany(Propiedad::class, 'adicionals_propiedads','propiedad_id', 'adicional_id');
    }
    public function proyecto()
    {
        return $this->belongsToMany(Proyecto::class, 'adicional_tag_proyecto','proyecto_id', 'adicional_id');
    }
}
