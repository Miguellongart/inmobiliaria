<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RedSocial;
use Illuminate\Http\Request;

class RedSocialController extends Controller
{
    public function index()
    {
        $rows = RedSocial::all();
        $title = 'Redes Sociales';
        return view('admin.redsocial.index', compact('rows', 'title'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'icon'          => 'required',
            'url'           => 'required',
            'estatus'       => 'required',
            'nombre'        => 'required',
        ]);

        if(empty($request->cust_id)){
            $empresa = new RedSocial();
            $empresa->icon = $request->icon;
            $empresa->url = $request->url;
            $empresa->estatus = $request->estatus;
            $empresa->nombre = $request->nombre;
            $empresa->save();
        }else{
            $empresa = RedSocial::find($request->cust_id);
            $empresa->icon = $request->icon;
            $empresa->url = $request->url;
            $empresa->estatus = $request->estatus;
            $empresa->nombre = $request->nombre;
            $empresa->save();
        }
        if(empty($request->cust_id))
            $msg = 'Guardado con Exito';
        else
            $msg = 'Actualizado con Exito';

        return redirect()->route('admin.redsocial.index')->with('success', $msg);
    }
    public function edit($id)
    {
        $data = RedSocial::findOrFail($id);
        return response()->json($data);
    }
    public function destroy($id)
    {
        $row = RedSocial::findOrFail($id);
        $row->delete();
        return redirect()->route('admin.redsocial.index')->with('danger', 'Eliminado con Exito');
    }
}
