@csrf
<div class="card-body">
    <div class="form-group">
        <label for="name">Permiso</label>
    <input type="text" class="form-control" name="name" value="{{old('name',$permission->name)}}" id="name" placeholder="Permiso">
    </div>
    <div class="form-group">
        <label for="guard_name">Guard name</label>
        <input type="text" class="form-control" name="guard_name" value="{{old('name',$permission->guard_name)}}" id="guard_name" placeholder="Guard name">
    </div>
</div>
<!-- /.card-body -->
<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{$btnText}}</button>
</div>