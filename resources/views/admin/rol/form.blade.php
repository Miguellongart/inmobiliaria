@csrf
<div class="card-body">
    <div class="row">
        <div class="form-group col-4 col-md-4 col-sm-12">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" value="{{old('name',$row->name)}}" id="name" placeholder="Nombre">
        </div>
        <div class="form-group col-4 col-md-4 col-sm-12">
            <label for="description">Descripcion</label>
            <input type="text" class="form-control" name="description" value="{{old('description',$row->description)}}" id="description" placeholder="Descripcion">
        </div>
        <div class="form-group col-4 col-md-4 col-sm-12">
            <label for="guard_name">Guard name</label>
            <input type="text" class="form-control" name="guard_name" value="{{old('guard_name',$row->guard_name)}}" id="guard_name" placeholder="Guard name">
        </div>
    </div>
</div>
<div class="card-body">
    <h3>Asignacion de Permisos</h3>
    <div class="form-group">
        @foreach($permissions as $p)
        <div class="form-check">
            <input class="form-check-input" name="permission[]" @if($row->hasPermissionTo($p->id)) checked @endif  value="{{old('permission',$p->id)}}" type="checkbox">
            <label class="form-check-label">{{$p->description}}</label>
        </div>
        @endforeach
    </div>
</div>
<!-- /.card-body -->
<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{$btnText}}</button>
</div>
