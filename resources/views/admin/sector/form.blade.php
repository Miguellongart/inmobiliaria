@csrf
<div class="card-body">
    <div class="row">
        <div class="form-group col-4 col-md-4 col-sm-12">
            <label>Seleccionar Municipio</label>
            <select name="municipio_id" class="custom-select" id="select_2">
              <option>Seleccione una Opcion</option>
              @foreach ($municipios as $municipio)
                <option 
                    @if($row->municipio_id == $municipio->id) selected @endif
                    value="{{$municipio->id}}">
                    {{$municipio->municipio}}
                </option>                  
              @endforeach
            </select>
          </div>
          <div class="form-group col-4 col-md-4 col-sm-12">
              <label for="sector">Sector</label>
              <input type="text" class="form-control" name="sector" value="{{old('sector',$row->sector)}}" id="sector" placeholder="Sector">
          </div>
          <div class="form-group col-4 col-md-4 col-sm-12">
              <label for="localidad">Localidad</label>
              <input type="text" class="form-control" name="localidad" value="{{old('localidad',$row->localidad)}}" id="municipio" placeholder="Localidad">
          </div>
    </div>
</div>
<!-- /.card-body -->
<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{$btnText}}</button>
    <a href="{{route('admin.sector.index')}}" class="btn btn-danger">Cancelar</a>
</div>
