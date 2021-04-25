<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;

    protected $fillable = [
        'imagen'
    ];
    public function propiedad()
    {
        return $this->belongsToMany(Propiedad::class);
    }
}
