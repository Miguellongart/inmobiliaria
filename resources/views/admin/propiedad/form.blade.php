@csrf
<div class="card-body">
    <div class="row">
        <!--row1-->
        <div class="form-group col-12 col-sm-12 col-md-4">
            <label for="titulo">Titulo<span style="color: red">*</span></label>
            <input type="text" class="form-control" name="titulo" value="{{old('titulo',$row->titulo)}}" id="titulo" placeholder="Titulo">
        </div>
        <div class="form-group col-12 col-sm-12 col-md-4">
            <label for="codigo">Codigo Propiedad<span style="color: red">*</span></label>
            <input type="text" class="form-control" name="codigo" value="{{old('codigo',$row->codigo)}}" id="codigo" placeholder="Codigo Propiedad">
        </div>
        <div class="form-group col-12 col-sm-12 col-md-4">
            <label for="slug">Slug<span style="color: red">*</span></label>
            <input type="text" class="form-control" name="slug" value="" id="slug" readonly>
        </div>

        <!--row2-->
        <div class="form-group col-12 col-sm-12 col-md-3">
            <label>Pais<span style="color: red">*</span></label>
            <select name="pais_id" class="custom-select" id="pais_id">
                <option>Seleccione una Opcion</option>
                @foreach ($pais as $p)
                    <option value="{{$p->id}}">
                        {{$p->nombre}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-12 col-sm-12 col-md-3">
            <label>Estado<span style="color: red">*</span></label>
            <select name="estado_id" class="custom-select" id="estado_id">
            </select>
        </div>
        <div class="form-group col-12 col-sm-12 col-md-3">
            <label>Municipio<span style="color: red">*</span></label>
            <select name="municipio_id" class="custom-select" id="municipio_id">
            </select>
        </div>
        <div class="form-group col-12 col-sm-12 col-md-3">
            <label>Localidad<span style="color: red">*</span></label>
            <select name="sector_id" class="custom-select" id="localidad_id">
            </select>
        </div>
        <!--row3-->
        <div class="form-group col-12 col-sm-12 col-md-6">
            <div class="row">
                <div class="col-4">
                    <label for="n_habitacion">N° Habitacion<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="n_habitacion" value="{{old('n_habitacion',$row->n_habitacion)}}" id="slug" placeholder="1">
                </div>
                <div class="col-4">
                    <label for="n_bano">N° Baño<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="n_bano" value="{{old('n_bano',$row->n_bano)}}" id="slug" placeholder="1">
                </div>
                <div class="col-4">
                    <label for="n_estacionamiento">N° Estacionamiento<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="n_estacionamiento" value="{{old('n_estacionamiento',$row->n_estacionamiento)}}" id="slug" placeholder="1">
                </div>
            </div>
        </div>
        <div class="form-group col-12 col-sm-12 col-md-6">
            <div class="row">
                <div class="col-4">
                    <label for="precio_BS">Bs<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="precio_BS" value="{{old('precio_BS',$row->precio_BS)}}" id="precio_BS" placeholder="Bs">
                </div>
                <div class="col-4">
                    <label for="precio_PTR">Preto<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="precio_PTR" value="{{old('precio_PTR',$row->precio_PTR)}}" id="slug" placeholder="Preto">
                </div>
                <div class="col-4">
                    <label for="precio_USD">USD<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="precio_USD" value="{{old('precio_USD',$row->precio_USD)}}" id="slug" placeholder="USD">
                </div>
            </div>
        </div>
        <div class="form-group col-12 col-sm-12 col-md-6">
            <div class="row">
                <div class="col-4">
                    <label for="antiguedad">Antiguedad</label>
                    <input type="text" class="form-control" name="antiguedad" value="{{old('antiguedad',$row->antiguedad)}}" id="slug" placeholder="1">
                </div>
                <div class="col-4">
                    <label for="total_terreno">Total Terreno Mts2</label>
                    <input type="text" class="form-control" name="total_terreno" value="{{old('total_terreno',$row->total_terreno)}}" id="slug" placeholder="1">
                </div>
                <div class="col-4">
                    <label for="area_construccion">Area Construccion</label>
                    <input type="text" class="form-control" name="area_construccion" value="{{old('area_construccion',$row->area_construccion)}}" id="slug" placeholder="1">
                </div>
            </div>
        </div>
        <!--selects-->
        <div class="form-group col-12 col-sm-12 col-md-4">
            <label>Vendedor<span style="color: red">*</span></label>
            <select name="user_id" class="custom-select" id="user_id">
                <option>Seleccione una Opcion</option>
                @foreach ($usuarios as $user)
                    <option
                        @if($row->user_id == $user->id) selected @endif value="{{$user->id}}">
                        {{$user->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-12 col-sm-12 col-md-4">
            <label>Tipo propiedad<span style="color: red">*</span></label>
            <select name="t_propiedad_id" class="custom-select" id="t_propiedad_id">
                  <option>Seleccione una Opcion</option>
                  @foreach ($t_prop as $tp)
                        <option
                            @if($row->t_propiedad_id == $tp->id) selected @endif
                            value="{{$tp->id}}">
                            {{$tp->tipo_propiedad}}
                        </option>
                  @endforeach
            </select>
        </div>
        <div class="form-group col-12 col-sm-12 col-md-4">
            <label>Tipo de Operacion<span style="color: red">*</span></label>
            <select name="t_operacion_id" class="custom-select" id="t_operacion_id">
                <option>Seleccione una Opcion</option>
                @foreach ($t_prop as $tp)
                    <option
                        @if($row->t_operacion_id == $tp->id) selected @endif
                    value="{{$tp->id}}">
                        {{$tp->tipo_propiedad}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-12 col-sm-12 col-md-4">
            <label>Estado Propiedad</label>
            <select name="estado_propiedad" class="custom-select" id="estado_propiedad">
                <option value="Obra Gris">Obra Gris</option>
                <option value="Obra blanca">Obra blanca</option>
                <option value="Lista para habitar">Lista para habitar</option>
                <option value="A reformar">A reformar</option>
            </select>
        </div>
        <!--selects-->
        <div class="form-group col-12 col-sm-12 col-md-4">
            <label>Tipo De Vista</label>
            <select name="t_vista" class="custom-select" id="t_vista">
                <option @if($row->t_vista) selected @endif value="Obra Gris">Obra Gris</option>
                <option @if($row->t_vista) selected @endif value="Obra blanca">Obra blanca</option>
                <option @if($row->t_vista) selected @endif value="Lista para habitar">Lista para habitar</option>
                <option @if($row->t_vista) selected @endif value="A reformar">A reformar</option>
            </select>
        </div>
        <div class="form-group col-12 col-sm-12 col-md-4">
            <label for="nota">Nota<span style="color: red">*</span></label>
            <input type="text" class="form-control" name="nota" value="{{old('nota',$row->nota)}}" id="nota" placeholder="Nota">
        </div>
        <div class="form-group col-12 col-sm-12 col-md-4">
            <label>Destacado</label>
            <select name="destacado" class="custom-select" id="destacado">
                <option @if($row->destacado) selected @endif value="SI">Si</option>
                <option @if($row->destacado) selected @endif value="NO">No</option>
            </select>
        </div>
        <div class="form-group col-12 col-sm-12 col-md-12">
            <label for="nota">Descripcion<span style="color: red">*</span></label>
            <textarea name="descripcion" id="editor1"></textarea>
        </div>
        <div class="form-group col-12 col-sm-12 col-md-4">
            <label for="nota">Imagen Principal<span style="color: red">*</span></label>
            <div class="custom-file">
                <input type="file" name="imagen_p" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile"></label>
            </div>
        </div>
        <div class="form-group col-12 col-sm-12 col-md-4">
            <label>Estado de la publicacion<span style="color: red">*</span></label>
            <select name="estatus" class="custom-select" id="estatus">
                <option value="PUBLICADO">PUBLICADO</option>
                <option value="BORRADOR">BORRADOR</option>
            </select>
        </div>
        @foreach($instalacion->chunk(14) as $ins)
        <div class="form-group col-12 col-sm-12 col-md-12">
            <label>Instalaciones y comodidades</label>
            <div class="row">
                @foreach($ins as $data)
                    <div class="form-check col-2 col-sm-2 col-md-2">
                        <input class="form-check-input" type="checkbox" value="{{$data->id}}" name="instalacion[]">
                        <label class="form-check-label">{{$data->instalacion}}</label>
                    </div>
                @endforeach
            </div>
        </div>
        @endforeach
        @foreach($facilidad->chunk(14) as $fa)
            <div class="form-group col-12 col-sm-12 col-md-12">
                <label>Facilidades Cercanas</label>
                <div class="row">
                    @foreach($fa as $data)
                        <div class="form-check col-2 col-sm-2 col-md-2">
                            <input class="form-check-input" type="checkbox" value="{{$data->id}}" name="facilidad[]">
                            <label class="form-check-label">{{$data->facilidad}}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
        @foreach($adicional->chunk(14) as $ads)
            <div class="form-group col-12 col-sm-12 col-md-12">
                <label>Adicionales</label>
                <div class="row">
                    @foreach($ads as $data)
                        <div class="form-check col-2 col-sm-2 col-md-2">
                            <input class="form-check-input" type="checkbox" value="{{$data->id}}" name="adicional[]">
                            <label class="form-check-label">{{$data->adicional}}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- /.card-body -->
<div class="row">
    <div class="m-3">
        <button type="submit" class="btn btn-primary mx-2">{{$btnText}}</button>
        <a href="{{route('admin.propiedad.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</div>
