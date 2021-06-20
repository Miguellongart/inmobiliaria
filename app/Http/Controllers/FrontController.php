<?php

namespace App\Http\Controllers;

use App\Mail\Sendcontacto;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Pais;
use App\Models\Propiedad;
use App\Models\Proyecto;
use App\Models\Sector;
use App\Models\TipoOperacion;
use App\Models\TipoPropiedad;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        //dd('hola');
        $propiedades = Propiedad::where('estatus','=', 'PUBLICADO')->where('destacado','=', 'SI')->take(4)->get();
        $proyectos = Proyecto::where('estatus','=', 'PUBLICADO')->where('destacado','=', 'SI')->take(6)->get();

        //filro datos
        $toperacion = TipoOperacion::all();
        $tpropiedad = TipoPropiedad::all();
        $pais = Pais::all();
        $estado = Estado::all();
        $municipio = Municipio::all();
        $sector =  Sector::all();
        return view('front.index',
            compact(
                'propiedades',
                'proyectos',
                'tpropiedad',
                'toperacion',
                'pais','estado','municipio','sector',
                'estado',
            ));
    }

    public function propiedades(Request $request){
        $toperacion = $request->toperacion;$tpropiedad = $request->tpropiedad;$pais = $request->pais;
        $estado = $request->estado;$municipio = $request->municipio;$sector = $request->sector;
        $estado_propiedadr = $request->estado_propiedad; $total_terreno = $request->total_terreno;
        $area_construccion = $request->area_construccion; $habitaciones = $request->habitaciones;
        $query = Propiedad::query();
        //filro datos
        $toperacion = TipoOperacion::all();$tpropiedad = TipoPropiedad::all();$pais = Pais::all();
        $estado = Estado::all();$municipio = Municipio::all();$sector =  Sector::all();
        if (!empty($toperacion)) {
            $query->where('t_operacion_id','LIKE','%'.$toperacion.'%');
        }
        if (!empty($tpropiedad)) {
            $query->where('t_propiedad_id','LIKE','%'.$tpropiedad.'%');
        }
        if (!empty($pais)) {
            $query->where('pais_id','LIKE','%'.$pais.'%');
        }
        if (!empty($estado)) {
            $query->where('estado_id','LIKE','%'.$estado.'%');
        }
        if (!empty($municipio)) {
            $query->where('municipio_id','LIKE','%'.$municipio.'%');
        }
        if (!empty($sector)) {
            $query->where('sector_id','LIKE','%'.$sector.'%');
        }
        if (!empty($estado_propiedadr)) {
            $query->where('estado_propiedad','LIKE','%'.$estado_propiedadr.'%');
        }
        if (!empty($total_terreno)) {
            $query->where('total_terreno','LIKE','%'.$total_terreno.'%');
        }
        if (!empty($area_construccion)) {
            $query->where('area_construccion','LIKE','%'.$area_construccion.'%');
        }
        if (!empty($habitaciones)) {
            $query->where('n_habitacion','LIKE','%'.$habitaciones.'%');
        }
        $query->where('estatus','=', 'PUBLICADO');
        $contents = $query->paginate(10);
        $propiedades = ($contents != "")?$contents : Propiedad::where('estatus','=', 'PUBLICADO')->paginate(10);

        return view('front.propiedades', compact('propiedades',
                'tpropiedad','toperacion','pais','estado','municipio','sector','estado'));
    }
    public function vender(){
        return view('front.vender');
    }

    public function proyectos(Request $request){
        //dd('hola');
        $proyectos = Proyecto::where('estatus','=', 'PUBLICADO')
                                ->where('destacado','=', 'SI')
                                ->get();
        return view('front.proyectos', compact('proyectos'));
    }

    public function contacto(){
        //dd('hola');
        return view('front.contacto');
    }
    public function servicios(){
        return view('front.servicios');
    }

    public function detallePropiedad($id){
        $detalleProp = Propiedad::where('slug','LIKE','%'.$id.'%')->first();
        return view('front.detallePropiedad',compact('detalleProp'));
    }
    public function detalleProyecto($id){
        $detalleProp = Proyecto::where('slug','LIKE','%'.$id.'%')->first();
        return view('front.detallePropiedad',compact('detalleProp'));
    }
    public function filter(Request $request)
    {
    }
    public function sendcontacto(Request $request){
        Mail::to('longart86@gmail.com')->send(new Sendcontacto($request->all()));
    }
}
