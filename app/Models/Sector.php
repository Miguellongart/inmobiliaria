<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'sector',
        'localidad',
        'municipio_id',
    ];

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }
}
