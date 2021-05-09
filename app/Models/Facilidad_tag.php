<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facilidad_tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'estatus',
        'facilidad',
        'facilidad_en',
    ];
    public function propiedad()
    {
        return $this->belongsToMany(Propiedad::class,'facilidads_propiedads','propiedad_id', 'facilidad_id');
    }
}
