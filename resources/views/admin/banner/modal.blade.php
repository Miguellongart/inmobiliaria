<!-- Modal crear tags empresaes -->
<div class="modal fade" id="crearbanner" tabindex="-1" role="dialog" aria-labelledby="crearbannerLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="crearbannerLabel">Banners</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('admin.banner.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-12 col-md-12 col-sm-12">
                            <label for="titulo_es">Titulo</label>
                            <input type="text" class="form-control" name="titulo_es" id="titulo_es" value="{{old('titulo_es')}}" placeholder="Titulo">
                        </div>
                        <div class="form-group col-12 col-md-12 col-sm-12">
                            <label for="titulo_es">Pagina</label>
                            <select class="form-control" name="page" id="page">
                                <option value="">Seleccione una Opcion</option>
                                <option value="Home">Home</option>
                                <option value="servicio">Servicios</option>
                                <option value="proyecto">Proyecto</option>
                                <option value="vender">Vender</option>
                                <option value="contacto">Contacto</option>
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-12 col-sm-12">
                            <label for="nota">Imagen<span style="color: red">*</span></label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile"></label>
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-12 col-sm-12">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="estatus1" name="estatus" value="1" checked>
                                <label for="estatus1" class="custom-control-label">Habilitado</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="estatus0" name="estatus" value="0">
                                <label for="estatus0" class="custom-control-label">Inhabilitado</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Add and Edit customer modal -->
<div class="modal fade" id="editarempresa" aria-hidden="true" >
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
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>empresaes Cercanas</strong>
                                <input type="text" name="empresa" id="empresa" class="form-control" onchange="validate()" >
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-12 col-sm-12">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="customRadio1" name="estatus" value="1">
                                <label for="customRadio1" class="custom-control-label">Habilitado</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="customRadio2" name="estatus" value="0">
                                <label for="customRadio2" class="custom-control-label">Inhabilitado</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" id="btn-save" name="btnsave" class="btn btn-primary" disabled>Modificar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
