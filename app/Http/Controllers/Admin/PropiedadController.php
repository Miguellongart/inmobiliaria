<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropiedadStoreRequest;
use App\Models\Adicional_tag;
use App\Models\Facilidad_tag;
use App\Models\Galeria;
use App\Models\Instalacion_tag;
use App\Models\Propiedad;
use App\Models\TipoOperacion;
use App\Models\TipoPropiedad;
use App\Models\User;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\Storage;

class PropiedadController extends Controller
{
    public function index()
    {
        $rows = Propiedad::all();
        $title = 'Listado de Propiedades';
        return view('admin.propiedad.index', compact('rows', 'title'));
    }

    public function create()
    {
        $title = 'Añadir Propiedad';
        return view('admin.propiedad.create', [
            'row' => new Propiedad(),
            't_prop' => TipoPropiedad::all(),
            't_oper' => TipoOperacion::all(),
            'instalacion' => Instalacion_tag::all(),
            'adicional' => Adicional_tag::all(),
            'facilidad' => Facilidad_tag::all(),
            'usuarios' => User::all(),
            'title' => $title,
        ]);
    }

    public function galeriaForm($id)
    {
        $title = 'Añadir Imagenes a Propiedad';
        return view('admin.propiedad.galeria', [
            'title' => $title,
            'propiedad_id' => $id,
        ]);
    }

    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');
        if($image){
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('img/galeria'),$imageName);
        }
        $galeria = new Galeria();
        $galeria->imagen = $imageName;
        $galeria->save();

        $galeria->propiedad()->sync($request->get('id'));
        return response()->json(['success'=>$imageName]);
    }
    public function store(Request $request)
    {
        $tr = new GoogleTranslate('en');
        $request->validate([
            'titulo'                        => 'required|unique:propiedads,titulo',
            'codigo'                        => 'required|unique:propiedads,codigo',
            'slug'                          => 'required|unique:propiedads,slug',
            'user_id'                       => 'required',
            'n_habitacion'                  => 'required',
            'n_bano'                        => 'required',
            'n_estacionamiento'             => 'required',
            'precio_BS'                     => 'required',
            'precio_PTR'                    => 'required',
            'precio_USD'                    => 'required',
            't_propiedad_id'                => 'required',
            't_operacion_id'                => 'required',
            'descripcion'                   => 'required',
            'imagen_p'                      => 'mimes:jpg,jpeg,png',
            'estatus'                       => 'required|in:BORRADOR,PUBLICADO',
        ]);

        //IMAGE
        $image = $request->file('imagen_p');
        if($image){
            $image = $request->file('imagen_p');
            $imageName = 'img/propiedad/'.time().'.'.$image->extension();
            $image->move(public_path('img/propiedad'),$imageName);
        }

        $prop = new Propiedad();
        $prop->codigo = $request->codigo;
        $prop->titulo = $request->titulo;
        $prop->slug = $request->slug;
        $prop->descripcion = $request->descripcion;
        $prop->t_vista = $request->t_vista;
        $prop->n_habitacion = $request->n_habitacion;
        $prop->n_bano = $request->n_bano;
        $prop->n_estacionamiento = $request->n_estacionamiento;
        $prop->precio_BS = $request->precio_BS;
        $prop->precio_PTR = $request->precio_PTR;
        $prop->precio_USD = $request->precio_USD;
        $prop->area_construccion = $request->area_construccion;
        $prop->total_terreno = $request->total_terreno;
        $prop->estado_propiedad = $request->estado_propiedad;
        $prop->antiguedad = $request->antiguedad;
        $prop->estatus = $request->estatus;
        $prop->video = $request->video;
        $prop->nota = $request->nota;
        $prop->imagen_p = $imageName;

        $prop->titulo_en = $tr->translate($request->titulo);
        $prop->slug_en = $tr->translate($request->slug);
        $prop->descripcion_en = $tr->translate(strip_tags($request->descripcion));
        $prop->t_vista_en =  $tr->translate($request->t_vista);
        $prop->nota_en =  $tr->translate($request->nota);
        $prop->estado_propiedad_en = $tr->translate($request->estado_propiedad);

        $prop->user_id = $request->user_id;
        $prop->t_propiedad_id = $request->t_propiedad_id;
        $prop->t_operacion_id = $request->t_operacion_id;
        $prop->save();

        //TAGS
        $prop->adicional_tag()->sync($request->get('adicional'));
        $prop->facilidad_tag()->sync($request->get('facilidad'));
        $prop->instalacion_tag()->sync($request->get('instalacion'));

        return redirect()->route('admin.propiedad.index')->with('success', 'guardado con extiro');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $title = 'Editar Propiedad';
        return view('admin.propiedad.edit', [
            'row' => Propiedad::find($id),
            't_prop' => TipoPropiedad::all(),
            't_oper' => TipoOperacion::all(),
            'instalacion' => Instalacion_tag::all(),
            'adicional' => Adicional_tag::all(),
            'facilidad' => Facilidad_tag::all(),
            'usuarios' => User::all(),
            'title' => $title,
        ]);
    }

    public function update(Request $request, $id)
    {
        $tr = new GoogleTranslate('en');
        $request->validate([
            'titulo'                        => 'required|unique:propiedads,titulo',
            'codigo'                        => 'required|unique:propiedads,codigo',
            'slug'                          => 'required|unique:propiedads,slug',
            'user_id'                       => 'required',
            'n_habitacion'                  => 'required',
            'n_bano'                        => 'required',
            'n_estacionamiento'             => 'required',
            'precio_BS'                     => 'required',
            'precio_PTR'                    => 'required',
            'precio_USD'                    => 'required',
            't_propiedad_id'                => 'required',
            't_operacion_id'                => 'required',
            'descripcion'                   => 'required',
            'imagen_p'                      => 'mimes:jpg,jpeg,png',
            'estatus'                       => 'required|in:BORRADOR,PUBLICADO',
        ]);

        //IMAGE
        $image = $request->file('imagen_p');
        if($image){
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('img/propiedad'),$imageName);
        }

        $prop = Propiedad::find($id);
        $prop->codigo = $request->codigo;
        $prop->titulo = $request->titulo;
        $prop->slug = $request->slug;
        $prop->descripcion = $request->descripcion;
        $prop->t_vista = $request->t_vista;
        $prop->n_habitacion = $request->n_habitacion;
        $prop->n_bano = $request->n_bano;
        $prop->n_estacionamiento = $request->n_estacionamiento;
        $prop->precio_BS = $request->precio_BS;
        $prop->precio_PTR = $request->precio_PTR;
        $prop->precio_USD = $request->precio_USD;
        $prop->area_construccion = $request->area_construccion;
        $prop->total_terreno = $request->total_terreno;
        $prop->estado_propiedad = $request->estado_propiedad;
        $prop->antiguedad = $request->antiguedad;
        $prop->estatus = $request->estatus;
        $prop->video = $request->video;
        $prop->nota = $request->nota;
        $prop->imagen_p = $imageName;

        $prop->titulo_en = $tr->translate($request->titulo);
        $prop->slug_en = $tr->translate($request->slug);
        $prop->descripcion_en = $tr->translate(strip_tags($request->descripcion));
        $prop->t_vista_en =  $tr->translate($request->t_vista);
        $prop->nota_en =  $tr->translate($request->nota);
        $prop->estado_propiedad_en = $tr->translate($request->estado_propiedad);

        $prop->user_id = $request->user_id;
        $prop->t_propiedad_id = $request->t_propiedad_id;
        $prop->t_operacion_id = $request->t_operacion_id;
        $prop->save();
        //TAGS
        $prop->adicional_tag()->sync($request->get('adicional'));
        $prop->facilidad_tag()->sync($request->get('facilidad'));
        $prop->instalacion_tag()->sync($request->get('instalacion'));
    }

    public function destroy($id)
    {
        //
    }
}
