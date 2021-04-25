<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'titulo',
        'titulo_en',
        'slug',
        'slug_en',
        'descripcion',
        'descripcion_en',
        'n_habitacion',
        'n_bano',
        'n_estacionamiento',
        'antiguedad',
        't_vista',
        't_vista_en',
        'imagen_p',
        'video',
        'nota',
        'nota_en',
        'area_construccion',
        'total_terreno',
        'estado_propiedad',
        'estado_propiedad_en',
        'precio_BS',
        'precio_PTR',
        'precio_USD',
        'estatus',
        'user_id',
        't_propiedad_id',
        't_operacion_id',


];
    public function adicional_tag()
    {
        return $this->belongsToMany(Adicional_tag::class,'adicionals_propiedads','propiedad_id', 'adicional_id');
    }
    public function facilidad_tag()
    {
        return $this->belongsToMany(Facilidad_tag::class,'facilidads_propiedads','propiedad_id', 'facilidad_id');
    }
    public function instalacion_tag()
    {
        return $this->belongsToMany(Instalacion_tag::class, 'instalacions_propiedads','propiedad_id', 'instalacion_id');
    }
    public function galeria()
    {
        return $this->belongsToMany(Galeria::class);
    }
}
