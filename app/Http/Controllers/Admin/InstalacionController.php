<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instalacion_tag;
use Illuminate\Http\Request;

class InstalacionController extends Controller
{
    public function index()
    {
        $rows = Instalacion_tag::all();
        $title = 'Instalaciones y Comodidades';
        return view('admin.instalaciones.index', compact('rows', 'title'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'instalacion' => 'required',
            'estatus' => 'required',
        ]); 

        Instalacion_tag::updateOrCreate(
            ['instalacion' => $request->instalacion],
            ['estatus' => $request->estatus],
        );
        if(!isset($request->cust_id) && empty($request->cust_id))
            $msg = 'Guardado con Exito';
        else
            $msg = 'Actualizado con Exito';

        return redirect()->route('admin.instalacion.index')->with('success', $msg);
    }

    
    public function edit($id)
    {
        $data = Instalacion_tag::findOrFail($id);
        return response()->json($data);
    }
    public function destroy($id)
    {
        $row = Instalacion_tag::findOrFail($id);
        $row->delete();
        return redirect()->route('admin.instalacion.index')->with('danger', 'Eliminado con Exito');
    }
}
