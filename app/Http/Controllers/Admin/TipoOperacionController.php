<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TipoOperacion;
use Illuminate\Http\Request;

class TipoOperacionController extends Controller
{
    public function index()
    {
        $rows = TipoOperacion::all();
        $title = 'Tipos de Operacion';
        return view('admin.t_operacion.index', compact('rows', 'title'));
    }

    public function create()
    {
        $title = 'Tipo de Operacion';
        return view('admin.t_operacion.create', [
            'row' => new TipoOperacion(),
            'title' => $title,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo_operacion' => 'required',
        ]); 

        $row = new TipoOperacion($request->all());
        $row->save();
        return redirect()->route('admin.t_operacion.show', $row->id)->with('success', 'Guardado con Exito');
        
    }

    public function show($id)
    {
        $title = 'Tipo de Operacion';
        return view('admin.t_operacion.show', [
            'row' => TipoOperacion::findOrFail($id),
            'title' => $title,
        ])->with('success', 'Guardado con Exito');
    }
    
    public function edit($id)
    {
        $title = 'Tipo de Operacion';
        $estado = TipoOperacion::findOrFail($id);
        return view('admin.t_operacion.edit', [
            'row' => $estado,
            'title' => $title,
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'tipo_operacion' => 'required',
        ]); 

        $row = TipoOperacion::findOrFail($id);
        $row->update($request->all());

        return redirect()->route('admin.t_operacion.show', $row->id)->with('success', 'Actualizado con Exito');
    }

    public function destroy($id)
    {
        $row = TipoOperacion::findOrFail($id);
        $row->delete();
        return redirect()->route('admin.t_operacion.index')->with('danger', 'Eliminado con Exito');
    }
}
