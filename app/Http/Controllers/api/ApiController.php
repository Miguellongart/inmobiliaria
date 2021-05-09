<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Sector;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getEstado(Request $request){
        $id =  $request['id'];
        $data = Estado::where('pais_id', $id)->get();
        $estado = json_decode($data, true);
        return response()->json($estado);
    }
    public function getMunicipio(Request $request){
        $id =  $request['id'];
        $data = Municipio::where('estado_id', $id)->get();
        $municipio = json_decode($data, true);
        return response()->json($municipio);
    }
    public function getLocalidad(Request $request){
        $id =  $request['id'];
        $data = Sector::where('municipio_id', $id)->get();
        $sector = json_decode($data, true);
        return response()->json($sector);
    }
}
