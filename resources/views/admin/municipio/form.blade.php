@csrf
<div class="card-body">
    <div class="row">
        <div class="form-group col-6 col-md-6 col-sm-12">
            <label>Seleccionar Estado</label>
            <select name="estado_id" class="custom-select" id="pais_id">
              <option>Seleccione una Opcion</option>
              @foreach ($estados as $estado)
                <option
                    @if($row->estado_id == $estado->id) selected @endif
                    value="{{$estado->id}}">
                    {{$estado->estado}}
                </option>
              @endforeach
            </select>
          </div>
        <div class="form-group col-6 col-md-6 col-sm-12">
            <label for="municipio">Municipio</label>
            <input type="text" class="form-control" name="municipio" value="{{old('municipio',$row->municipio)}}" id="municipio" placeholder="Municipio">
        </div>
    </div>
</div>
<!-- /.card-body -->
<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{$btnText}}</button>
    <a href="{{route('admin.municipio.index')}}" class="btn btn-danger">Cancelar</a>
</div>
