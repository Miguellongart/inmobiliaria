<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TipoPropiedad;
use Illuminate\Http\Request;

class TipoPropiedadController extends Controller
{
    public function index()
    {
        $rows = TipoPropiedad::all();
        $title = 'Tipos de Propiedad';
        return view('admin.t_propiedad.index', compact('rows', 'title'));
    }

    public function create()
    {
        $title = 'Tipo de Propiedad';
        return view('admin.t_propiedad.create', [
            'row' => new TipoPropiedad(),
            'title' => $title,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo_propiedad' => 'required',
        ]); 

        $row = new TipoPropiedad($request->all());
        $row->save();
        return redirect()->route('admin.t_propiedad.show', $row->id)->with('success', 'Guardado con Exito');
        
    }

    public function show($id)
    {
        $title = 'Tipo de Propiedad';
        return view('admin.t_propiedad.show', [
            'row' => TipoPropiedad::findOrFail($id),
            'title' => $title,
        ])->with('success', 'Guardado con Exito');
    }
    
    public function edit($id)
    {
        $title = 'Tipo de Propiedad';
        $estado = TipoPropiedad::findOrFail($id);
        return view('admin.t_propiedad.edit', [
            'row' => $estado,
            'title' => $title,
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'tipo_propiedad' => 'required',
        ]); 

        $row = TipoPropiedad::findOrFail($id);
        $row->update($request->all());

        return redirect()->route('admin.t_propiedad.show', $row->id)->with('success', 'Actualizado con Exito');
    }

    public function destroy($id)
    {
        $row = TipoPropiedad::findOrFail($id);
        $row->delete();
        return redirect()->route('admin.t_propiedad.index')->with('danger', 'Eliminado con Exito');
    }
}
