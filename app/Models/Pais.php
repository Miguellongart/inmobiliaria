<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nombre',
        'nom',
        'iso2',
        'iso3',
        'phone_code'
    ];
    
    public function estado()
    {
        return $this->hasMany(Estado::class, 'pais_id', 'id');
    }
    
}
