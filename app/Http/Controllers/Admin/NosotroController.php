<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Nosotro;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class NosotroController extends Controller
{
    public function index()
    {
        $rows = Nosotro::all();
        $title = 'Sobre Nosotros';
        return view('admin.nosotro.index', compact('rows', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo'      => 'required',
            'descripcion' => 'required',
        ]);
        $tr = new GoogleTranslate('en');
        if(empty($request->cust_id)){
            $nosotro = new Nosotro();
            $nosotro->titulo = $request->titulo;
            $nosotro->descripcion = $request->descripcion;
            $nosotro->titulo_en = $tr->translate($request->titulo);
            $nosotro->descripcion_en = $tr->translate($request->descripcion);
            $nosotro->save();
        }else{
            $nosotro = Nosotro::find($request->cust_id);
            $nosotro->titulo = $request->titulo;
            $nosotro->descripcion = $request->descripcion;
            $nosotro->titulo_en = $tr->translate($request->titulo);
            $nosotro->descripcion_en = $tr->translate($request->descripcion);
            $nosotro->save();
        }
        if(empty($request->cust_id))
            $msg = 'Guardado con Exito';
        else
            $msg = 'Actualizado con Exito';

        return redirect()->route('admin.nosotro.index')->with('success', $msg);
    }
    public function edit($id)
    {
        $data = Nosotro::findOrFail($id);
        return response()->json($data);
    }
    public function destroy($id)
    {
        $row = Nosotro::findOrFail($id);
        $row->delete();
        return redirect()->route('admin.nosotro.index')->with('danger', 'Eliminado con Exito');
    }
}
