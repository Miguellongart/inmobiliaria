<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nosotro extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'titulo_en',
        'descripcion_en',
    ];
}
