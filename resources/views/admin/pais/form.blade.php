@csrf
<div class="card-body">
    <div class="row">
        <div class="form-group col-4 col-md-4 col-sm-12">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{old('nombre',$row->nombre)}}" id="nombre" placeholder="Nombre">
        </div>
        <div class="form-group col-4 col-md-4 col-sm-12">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{old('name',$row->name)}}" id="name" placeholder="Nombre">
        </div>
        <div class="form-group col-4 col-md-4 col-sm-12">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" value="{{old('nom',$row->nom)}}" id="nom" placeholder="nom">
        </div>
        <div class="form-group col-4 col-md-4 col-sm-12">
            <label for="iso2">ISO2</label>
            <input type="text" class="form-control" name="iso2" value="{{old('iso2',$row->iso2)}}" id="iso2" placeholder="ISO2">
        </div>
        <div class="form-group col-4 col-md-4 col-sm-12">
            <label for="iso3">ISO3</label>
            <input type="text" class="form-control" name="iso3" value="{{old('iso3',$row->iso3)}}" id="iso3" placeholder="ISO3">
        </div>
        <div class="form-group col-4 col-md-4 col-sm-12">
            <label for="phone_code">Codigo Postal</label>
            <input type="text" class="form-control" name="phone_code" value="{{old('phone_code',$row->phone_code)}}" id="phone_code" placeholder="Codigo Postal">
        </div>
    </div>
</div>
<!-- /.card-body -->
<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{$btnText}}</button>
    <a href="{{route('admin.pais.index')}}" class="btn btn-danger">Cancelar</a>
</div>
