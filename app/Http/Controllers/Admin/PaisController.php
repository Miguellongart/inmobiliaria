<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function index()
    {
        $paises = Pais::all();
        $title = 'Paises';
        return view('admin.pais.index', compact('paises', 'title'));
    }

    public function create()
    {
        $title = 'Paises';
        return view('admin.pais.create', [
            'row' => new Pais(),
            'title' => $title,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:pais',
            'phone_code' => 'required|unique:pais',
        ]); 

        $row = new Pais($request->all());
        $row->save();
        return redirect()->route('admin.pais.show', $row->id)->with('success', 'Guardado con Exito');
        
    }

    public function show($id)
    {
        $title = 'Paises';
        return view('admin.pais.show', [
            'row' => Pais::findOrFail($id),
            'title' => $title,
        ]);
    }

    public function edit($id)
    {
        $title = 'Paises';
        return view('admin.pais.edit', [
            'row' =>  Pais::findOrFail($id),
            'title' => $title,
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|unique:pais',
            'phone_code' => 'required|unique:pais',
        ]); 

        $row = Pais::findOrFail($id);
        $row->update($request->all());

        return redirect()->route('admin.rol.show', $row->id)->with('success', 'Actualizado con Exito');
    }

    public function destroy($id)
    {
        $row = Pais::findOrFail($id);
        $row->delete();
        return redirect()->route('admin.rol.index')->with('danger', 'Eliminado con Exito');
    }
}
