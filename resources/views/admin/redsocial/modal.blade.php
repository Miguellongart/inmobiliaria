<!-- Modal crear tags empresaes -->
<div class="modal fade" id="crearempresa" tabindex="-1" role="dialog" aria-labelledby="crearempresaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="crearempresaLabel">Sobre la Empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('admin.redsocial.store')}}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-12 col-md-12 col-sm-12">
                            <label for="nombre">Red Social</label>
                            <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}" placeholder="Red Social">
                        </div>
                        <div class="form-group col-12 col-md-12 col-sm-12">
                            <label for="icon">Icono</label>
                            <input type="text" class="form-control" name="icon" value="{{old('icon')}}" placeholder="Icono">
                        </div>
                        <div class="form-group col-12 col-md-12 col-sm-12">
                            <label for="url">Url</label>
                            <input type="text" class="form-control" name="url" value="{{old('url')}}" placeholder="Url">
                        </div>
                        <div class="form-group col-12 col-md-12 col-sm-12">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="estatus1" name="estatus" value="ACTIVO" checked>
                                <label for="estatus1" class="custom-control-label">ACTIVO</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="estatus0" name="estatus" value="INACTIVO">
                                <label for="estatus0" class="custom-control-label">INACTIVO</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Add and Edit customer modal -->
<div class="modal fade" id="editarredsocial" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="customerCrudModal"></h4>
            </div>
            <div class="modal-body">
                <form name="custForm" action="{{ route('admin.empresa.store') }}" method="POST">
                    <input type="hidden" name="cust_id" id="cust_id" >
                    @csrf
                    <div class="row">
                        <div class="form-group col-12 col-md-12 col-sm-12">
                            <label for="nombre">Red Social</label>
                            <input type="text" class="form-control" name="nombre" onchange="validate()" >
                        </div>
                        <div class="form-group col-12 col-md-12 col-sm-12">
                            <label for="icon">Icono</label>
                            <input type="text" class="form-control" name="icon" onchange="validate()" >
                        </div>
                        <div class="form-group col-12 col-md-12 col-sm-12">
                            <label for="url">Url</label>
                            <input type="text" class="form-control" name="url" onchange="validate()" >
                        </div>
                        <div class="form-group col-12 col-md-12 col-sm-12">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="estatus1" name="estatus" value="ACTIVO" checked>
                                <label for="estatus1" class="custom-control-label">ACTIVO</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="estatus0" name="estatus" value="INACTIVO">
                                <label for="estatus0" class="custom-control-label">INACTIVO</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" id="btn-save" name="btnsave" class="btn btn-primary" disabled>Modificar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function validate()
    {
        if(document.custForm.empresa.value !='' && document.custForm.estatus.value !='' )
            document.custForm.btnsave.disabled=false
        else
            document.custForm.btnsave.disabled=true
    }
</script>