<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facilidad_tag;
use Illuminate\Http\Request;
class FacilidadController extends Controller
{
    public function index()
    {
        $rows = Facilidad_tag::all();
        $title = 'Facilidades Cercanas';
        return view('admin.facilidades.index', compact('rows', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'facilidad' => 'required',
            'estatus' => 'required',
        ]); 

        Facilidad_tag::updateOrCreate(
            ['facilidad' => $request->facilidad],
            ['estatus' => $request->estatus],
        );
        if(!isset($request->cust_id) && empty($request->cust_id))
            $msg = 'Guardado con Exito';
        else
            $msg = 'Actualizado con Exito';

        return redirect()->route('admin.facilidad.index')->with('success', $msg);
        
    }
    
    public function edit($id)
    {
        $estado = Facilidad_tag::findOrFail($id);
        return response()->json($estado);
    }
    
    public function destroy($id)
    {
        $row = Facilidad_tag::findOrFail($id);
        $row->delete();
        return redirect()->route('admin.facilidad.index')->with('danger', 'Eliminado con Exito');
    }
}
