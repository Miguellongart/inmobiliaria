<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Municipio;
use App\Models\Sector;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    public function index()
    {
        $rows = Sector::all();
        $title = 'Sectores';
        return view('admin.sector.index', compact('rows', 'title'));
    }

    public function create()
    {
        $title = 'Sectores';
        return view('admin.sector.create', [
            'row' => new Sector(),
            'municipios' => Municipio::all(),
            'title' => $title,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'sector' => 'required',
            'localidad' => 'required',
            'municipio_id' => 'required',
        ]); 

        $row = new Sector($request->all());
        $row->save();
        return redirect()->route('admin.sector.show', $row->id)->with('success', 'Guardado con Exito');
        
    }
    
    public function show($id)
    {
        $title = 'Sector';
        $sector = Sector::findOrFail($id);
        return view('admin.sector.show', [
            'row' =>  $sector->load('municipio'),
            'title' => $title,
        ]);
    }

}
