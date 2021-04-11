<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Adicional_tag;
use Illuminate\Http\Request;

class AdicionalController extends Controller
{
    public function index()
    {
        $rows = Adicional_tag::all();
        $title = 'Adicionales';
        return view('admin.adicionales.index', compact('rows', 'title'));
    }

    public function store(Request $request)
    {        
        $request->validate([
            'adicional' => 'required',
            'estatus' => 'required',
        ]); 

        Adicional_tag::updateOrCreate(
            ['adicional' => $request->adicional],
            ['estatus' => $request->estatus],
        );
        if(!isset($request->cust_id) && empty($request->cust_id))
            $msg = 'Guardado con Exito';
        else
            $msg = 'Actualizado con Exito';

        return redirect()->route('admin.adicional.index')->with('success', $msg);
    }

    
    public function edit($id)
    {
        $data = Adicional_tag::findOrFail($id);
        return response()->json($data);
    }
    public function destroy($id)
    {
        $row = Adicional_tag::findOrFail($id);
        $row->delete();
        return redirect()->route('admin.adicional.index')->with('danger', 'Eliminado con Exito');
    }
}
