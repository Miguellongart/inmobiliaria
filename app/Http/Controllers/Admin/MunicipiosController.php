<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Pais;
use Illuminate\Http\Request;

class MunicipiosController extends Controller
{
    public function index()
    {
        $rows = Municipio::with('estado')->get();
        $title = 'Municipios';
        return view('admin.municipio.index', compact('rows', 'title'));
    }

    public function create()
    {
        $title = 'Municipio';
        return view('admin.municipio.create', [
            'row' => new Municipio(),
            'estados' => Estado::all(),
            'title' => $title,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'municipio' => 'required',
            'estado_id' => 'required',
        ]); 

        $row = new Municipio($request->all());
        $row->save();
        return redirect()->route('admin.municipio.show', $row->id)->with('success', 'Guardado con Exito');
        
    }

    public function show($id)
    {
        $title = 'Municipio';
        $municipio = Municipio::findOrFail($id);
        return view('admin.municipio.show', [
            'row' =>  $municipio->load('estado'),
            'title' => $title,
        ]);
    }

    public function edit($id)
    {
        $title = 'Municipio';
        $municipio = Municipio::findOrFail($id);
        return view('admin.municipio.edit', [
            'row' =>  $municipio->load('estado'),
            'estados' => Estado::all(),
            'title' => $title,
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'municipio' => 'required',
            'estado_id' => 'required',
        ]); 

        $row = Municipio::findOrFail($id);
        $row->update($request->all());

        return redirect()->route('admin.municipio.show', $row->id)->with('success', 'Actualizado con Exito');
    }

    public function destroy($id)
    {
        $row = Municipio::findOrFail($id);
        $row->delete();
        return redirect()->route('admin.municipio.index')->with('danger', 'Eliminado con Exito');
    }
}
