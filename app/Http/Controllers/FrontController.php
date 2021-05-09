<?php

namespace App\Http\Controllers;

use App\Models\Propiedad;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        //dd('hola');
        $propiedades = Propiedad::where('estatus','=', 'PUBLICADO')
                                ->where('destacado','=', 'SI')
                                ->take(4)
                                ->get();
        return view('front.index', compact('propiedades'));
    }

    public function propiedades(){
        $propiedades = Propiedad::where('estatus','=', 'PUBLICADO')->paginate(10);
        return view('front.propiedades', compact('propiedades'));
    }
    public function vender(){
        //dd('hola');
        return view('front.vender');
    }

    public function proyectos(){
        //dd('hola');
        return view('front.proyectos');
    }

    public function contacto(){
        //dd('hola');
        return view('front.contacto');
    }
    public function servicios(){
        return view('front.servicios');
    }

    public function detallePropiedad($id){
        $detalleProp = Propiedad::where('slug', $id)->first();
        return view('front.detallePropiedad',compact('detalleProp'));
    }
    public function filter(Request $request)
    {
        $gender = $request->input('gender');

        //You should validate these inputs your way

        $query = Employe::query();

        if (!empty($gender)) {
            $query->where('gender', $gender);
        }
        $collection = $query->get();

        return view('my-view', [
            'employees' => $collection,
        ]);
    }
}
