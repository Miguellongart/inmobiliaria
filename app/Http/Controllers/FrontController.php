<?php

namespace App\Http\Controllers;

use App\Models\Propiedad;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        //dd('hola');
        $propiedades = Propiedad::all();
        return view('front.index', compact('propiedades'));
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

}
