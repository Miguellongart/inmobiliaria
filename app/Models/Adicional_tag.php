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
    ];
}
