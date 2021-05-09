<?php

namespace Database\Seeders;

use App\Models\Adicional_tag;
use App\Models\Estado;
use App\Models\Facilidad_tag;
use App\Models\Instalacion_tag;
use App\Models\Municipio;
use App\Models\Pais;
use App\Models\Sector;
use App\Models\TipoOperacion;
use App\Models\TipoPropiedad;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Miguel Longart",
            "email" => "longart86@gmail.com",
            "password" => bcrypt("12345678"),
        ])->assignRole('admin');

        User::create([
            "name" => "Editor",
            "email" => "editor@gmail.com",
            "password" => bcrypt("12345678"),
        ])->assignRole('editor');

        User::factory(9)->create();
        Adicional_tag::factory(12)->create();
        Instalacion_tag::factory(12)->create();
        Facilidad_tag::factory( 12)->create();
        TipoOperacion::factory(9)->create();
        TipoPropiedad::factory(9)->create();

        $pais = new Pais();
        $pais->name = "VEN";
        $pais->nombre = "Venezuela";
        $pais->nom = "Venezuela";
        $pais->iso2 = "VE";
        $pais->iso3 = "VE";
        $pais->phone_code = 58;
        $pais->save();

        $estado = new Estado();
        $estado->estado = "Nueva esparta";
        $estado->pais_id = $pais->id;
        $estado->save();

        $municipio = new Municipio();
        $municipio->municipio = "Marcano";
        $municipio->estado_id = $estado->id;
        $municipio->save();

        $sector = new Sector();
        $sector->sector = "Laguna Honda";
        $sector->localidad = "Calle el sol";
        $sector->municipio_id = $municipio->id;
        $sector->save();



    }
}
