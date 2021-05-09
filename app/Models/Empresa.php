<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected  $table = 'empresas';
    protected $fillable = [
        'titulo_es',
        'descripcion_es',
        'titulo_en',
        'descripcion_en',
        'estatus',
    ];
}
