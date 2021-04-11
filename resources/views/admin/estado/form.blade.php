@csrf
<div class="card-body">
    <div class="row">
        <div class="form-group col-6 col-md-6 col-sm-12">
            <label>Seleccionar Pais</label>
            <select name="pais_id" class="custom-select" id="pais_id">
              <option>Seleccione una Opcion</option>
              @foreach ($paises as $pais)
                <option 
                    @if($row->pais_id == $pais->id) selected @endif
                    value="{{$pais->id}}">
                    {{$pais->nombre}}
                </option>                  
              @endforeach
            </select>
          </div>
        <div class="form-group col-6 col-md-6 col-sm-12">
            <label for="estado">Estado</label>
            <input type="text" class="form-control" name="estado" value="{{old('estado',$row->estado)}}" id="estado" placeholder="Estado">
        </div>
    </div>
</div>
<!-- /.card-body -->
<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{$btnText}}</button>
    <a href="{{route('admin.estado.index')}}" class="btn btn-danger">Cancelar</a>
</div>
