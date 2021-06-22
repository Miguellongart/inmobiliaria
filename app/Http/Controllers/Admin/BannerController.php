<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Stichoza\GoogleTranslate\GoogleTranslate;

class BannerController extends Controller
{
    public function index()
    {
        $rows = Banner::all();
        $title = 'Banners';
        return view('admin.banner.index', compact('rows', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo_es'     => 'required',
            'page'          => 'required',
            'image'         => 'required',
            'estatus'       => 'required',
        ]);

        $image = $request->file('image');
        $imageName = "";
        if($image){
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('img/banner'),$imageName);
        }
        $tr = new GoogleTranslate('en');
        if(empty($request->cust_id)){
            $banner = new Banner();
            $banner->titulo_es = $request->titulo_es;
            $banner->titulo_en = $tr->translate($request->titulo_es);
            $banner->page = $request->page;
            $banner->image = $imageName;
            $banner->estatus = $request->estatus;
            $banner->save();
        }else{
            $banner = Banner::find($request->cust_id);
            $banner->titulo_es = $request->titulo_es;
            $banner->titulo_en = $tr->translate($request->titulo_es);
            $banner->page = $request->page;
            $banner->image = $imageName;
            $banner->estatus = $request->estatus;
            $banner->save();

        }
        if(empty($request->cust_id))
            $msg = 'Guardado con Exito';
        else
            $msg = 'Actualizado con Exito';

        return redirect()->route('admin.banner.index')->with('success', $msg);
    }
    public function edit($id)
    {
        $data = Banner::findOrFail($id);
        return response()->json($data);
    }
    public function destroy($id)
    {
        $row = Banner::findOrFail($id);
        $row->delete();
        return redirect()->route('admin.banner.index')->with('danger', 'Eliminado con Exito');
    }
}
