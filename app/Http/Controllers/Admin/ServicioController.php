<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;
use App\File;
use Illuminate\Support\Facades\Storage;

class ServicioController extends Controller
{
    public function index()
    {
        $rows = Servicio::all();
        $title = 'Nuestros Servicios';
        return view('admin.servicio.index', compact('rows', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo'      => 'required',
            'descripcion' => 'required',
            'imagen' => 'required|image|max:2048'
        ]);
        $image = $request->file('imagen');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('img/servicios'),$imageName);

        $tr = new GoogleTranslate('en');
        if(empty($request->cust_id)){
            $nosotro = new Servicio();
            $nosotro->titulo = $request->titulo;
            $nosotro->descripcion = $request->descripcion;
            $nosotro->titulo_en = $tr->translate($request->titulo);
            $nosotro->descripcion_en = $tr->translate($request->descripcion);
            $nosotro->imagen = $imageName;
            $nosotro->save();
        }else{
            $nosotro = Servicio::find($request->cust_id);
            $nosotro->titulo = $request->titulo;
            $nosotro->descripcion = $request->descripcion;
            $nosotro->titulo_en = $tr->translate($request->titulo);
            $nosotro->descripcion_en = $tr->translate($request->descripcion);
            $nosotro->imagen = $imageName;
            $nosotro->save();
        }
        if(empty($request->cust_id))
            $msg = 'Guardado con Exito';
        else
            $msg = 'Actualizado con Exito';

        return redirect()->route('admin.servicio.index')->with('success', $msg);
    }
    public function edit($id)
    {
        $data = Servicio::findOrFail($id);
        return response()->json($data);
    }
    public function destroy($id)
    {
        $row = Servicio::findOrFail($id);
        $row->delete();
        return redirect()->route('admin.servicio.index')->with('danger', 'Eliminado con Exito');
    }
}
