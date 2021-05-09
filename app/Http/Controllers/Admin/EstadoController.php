<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Estado;
use App\Models\Pais;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function index()
    {
        $rows = Estado::with('pais')->get();
        $title = 'Estados';
        return view('admin.estado.index', compact('rows', 'title'));
    }

    public function create()
    {
        $title = 'Estado';
        return view('admin.estado.create', [
            'row' => new Estado(),
            'paises' => Pais::all(),
            'title' => $title,
        ]);
    }
    public function addestado($id){
        $title = 'Estado';
        return view('admin.estado.addestado', [
            'row' => new Estado(),
            'pais' => Pais::find($id),
            'title' => $title,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'estado' => 'required',
            'pais_id' => 'required',
        ]);

        $row = new Estado($request->all());
        $row->save();
        return redirect()->route('admin.estado.show', $row->id)->with('success', 'Guardado con Exito');

    }

    public function show($id)
    {
        $title = 'Estado';
        return view('admin.estado.show', [
            'row' => Estado::findOrFail($id),
            'title' => $title,
        ])->with('success', 'Guardado con Exito');
    }

    public function edit($id)
    {
        $title = 'Estado';
        $estado = Estado::findOrFail($id);
        return view('admin.estado.edit', [
            'row' => $estado->load('pais'),
            'paises' =>  Pais::all(),
            'title' => $title,
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'estado' => 'required',
            'pais_id' => 'required',
        ]);

        $row = Estado::findOrFail($id);
        $row->update($request->all());

        return redirect()->route('admin.estado.show', $row->id)->with('success', 'Actualizado con Exito');
    }

    public function destroy($id)
    {
        $row = Estado::findOrFail($id);
        $row->delete();
        return redirect()->route('admin.estado.index')->with('danger', 'Eliminado con Exito');
    }
}

