<!-- Modal crear tags adicionales -->
<div class="modal fade" id="crearadicional" tabindex="-1" role="dialog" aria-labelledby="crearadicionalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="crearadicionalLabel">Nuevas adicionales</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('admin.adicional.store')}}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-12 col-md-12 col-sm-12">
                            <label for="adicional">Tag Adicionales</label>
                            <input type="text" class="form-control" name="adicional" value="{{old('adicional')}}" placeholder="Adicionales">
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
<div class="modal fade" id="editaradicional" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="customerCrudModal"></h4>
            </div>
            <div class="modal-body">
                <form name="custForm" action="{{ route('admin.adicional.store') }}" method="POST">
                    <input type="hidden" name="cust_id" id="cust_id" >
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>adicionales</strong>
                                <input type="text" name="adicional" id="adicional" class="form-control" onchange="validate()" >
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
        if(document.custForm.adicional.value !='' && document.custForm.estatus.value !='' )
            document.custForm.btnsave.disabled=false
        else
            document.custForm.btnsave.disabled=true
    }
</script>