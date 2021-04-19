<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class EmpresaController extends Controller
{
    public function index()
    {
        $rows = Empresa::all();
        $title = 'Sobre la Empresa';
        return view('admin.empresa.index', compact('rows', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo_es'      => 'required',
            'descripcion_es' => 'required',
            'estatus'        => 'required',
        ]);

        $tr = new GoogleTranslate('en');
        if(empty($request->cust_id)){
            $empresa = new Empresa();
            $empresa->titulo_es = $request->titulo_es;
            $empresa->descripcion_es = $request->descripcion_es;
            $empresa->titulo_en = $tr->translate($request->titulo_es);
            $empresa->descripcion_en = $tr->translate($request->descripcion_es);
            $empresa->estatus = $request->estatus;
            $empresa->save();
        }else{
            $empresa = Empresa::find($request->cust_id);
            $empresa->titulo_es = $request->titulo_es;
            $empresa->descripcion_es = $request->descripcion_es;
            $empresa->titulo_en = $tr->translate($request->titulo_es);
            $empresa->descripcion_en = $tr->translate($request->descripcion_es);
            $empresa->estatus = $request->estatus;

        }
        if(empty($request->cust_id))
            $msg = 'Guardado con Exito';
        else
            $msg = 'Actualizado con Exito';

        return redirect()->route('admin.empresa.index')->with('success', $msg);
    }
    public function edit($id)
    {
        $data = Empresa::findOrFail($id);
        return response()->json($data);
    }
    public function destroy($id)
    {
        $row = Empresa::findOrFail($id);
        $row->delete();
        return redirect()->route('admin.empresa.index')->with('danger', 'Eliminado con Exito');
    }
}
