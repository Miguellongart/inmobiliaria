@csrf
<div class="card-body">
    <div class="row">
        <div class="form-group col-4 col-md-4 col-sm-12">
            <label for="tipo_operacion">Tipo operacion</label>
            <input type="text" class="form-control" name="tipo_operacion" value="{{old('tipo_operacion',$row->tipo_operacion)}}" id="tipo_operacion" placeholder="Tipo operacion">
        </div>
    </div>
</div>
<!-- /.card-body -->
<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{$btnText}}</button>
    <a href="{{route('admin.sector.index')}}" class="btn btn-danger">Cancelar</a>
</div>
