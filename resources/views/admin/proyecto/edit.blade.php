@extends('adminlte::page')

@section('title')
    {{$title}}
@stop

@section('css')
@stop

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{$title}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{$title}}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{$title}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{route('admin.proyecto.update', $row->id)}}">
                            @method('PATCH')
                            @include('admin.proyecto.form', ['btnText'=>'Actualizar'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')
    <script>
        $("#t_propiedad_id").select2();
        $("#t_operacion_id").select2();
        $("#estado_propiedad").select2();
        $("#t_vista").select2();
        $("#estatus").select2();
        $("#user_id").select2();
        CKEDITOR.replace('descripcion');

        $('#category_id').change(getSubcategories);
        function getSubcategories() {
            let category_id = $('#category_id').val();
            let url = base_url + 'ecommerce/product/json/' + category_id;
            $.getJSON(url, function(data) {
                if(data.data){
                    options = '<option value="">Selecciona</option>';
                    $("#subcategory_id option").remove();
                    $.each(data.data, function(key, val) {
                        options = options + "<option value='"+val.subcategory_id+"'>"+ val.name +"</option>";
                    });
                }
                else{
                    options = options + "<option value='0'>Sin resultados</option>";
                }
                $("#subcategory_id").append(options);
            });
        }
    </script>
@stop
