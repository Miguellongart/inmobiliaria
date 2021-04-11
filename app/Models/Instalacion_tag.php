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
    ];
}