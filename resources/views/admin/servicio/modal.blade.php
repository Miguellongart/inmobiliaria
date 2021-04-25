<!-- Modal crear servicios -->
<div class="modal fade" id="creardatos" tabindex="-1" role="dialog" aria-labelledby="crearservicioLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="crearservicioLabel">Servicios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('admin.servicio.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-12 col-md-12 col-sm-12">
                            <label for="titulo">Titulo</label>
                            <input type="text" class="form-control" name="titulo" value="{{old('titulo')}}" placeholder="Titulo">
                        </div>
                        <div class="form-group col-12 col-md-12 col-sm-12">
                            <label for="nota">Imagen<span style="color: red">*</span></label>
                            <div class="custom-file">
                                <input type="file" name="imagen" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile"></label>
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-12 col-sm-12">
                            <label for="nota">Imagen<span style="color: red">*</span></label>
                            <div class="custom-file">
                                <textarea name="descripcion" id="descripcion"></textarea>
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
<div class="modal fade" id="editarservicio" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="customerCrudModal"></h4>
            </div>
            <div class="modal-body">
                <form name="custForm" action="{{ route('admin.servicio.store') }}" method="POST">
                    <input type="hidden" name="cust_id" id="cust_id">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12 col-md-12 col-sm-12">
                            <label for="titulo">Titulo</label>
                            <input type="text" class="form-control" name="titulo" value="{{old('titulo')}}"  id="titulo" placeholder="Titulo">
                        </div>
                        <textarea name="descripcion" id="descripcion"></textarea>
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
        if(document.custForm.servicio.value !='' && document.custForm.estatus.value !='' )
            document.custForm.btnsave.disabled=false
        else
            document.custForm.btnsave.disabled=true
    }
</script>
