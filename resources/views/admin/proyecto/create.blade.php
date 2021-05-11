@extends('adminlte::page')

@section('title')
    {{$title}}
@stop

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
            <div class="justify-content-center">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{$title}}</h3>
                        </div>
                        <form action="{{route('admin.proyecto.store')}}" method="POST" enctype="multipart/form-data">
                            @include('admin.proyecto.form', ['btnText'=>'Guardar'])
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
        $("#pais_id").select2();
        $("#estado_id").select2();
        $("#municipio_id").select2();
        $("#localidad_id").select2();
        $("#destacado").select2();
        CKEDITOR.replace('descripcion');

        $('#pais_id').change(getPais);
        function getPais() {
            const pais_id = $('#pais_id').val();
            const inputEstado = $('#estado_id')
            const url = '/admin/Estado/json';
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: url,
                type: "POST",
                data: {_token: CSRF_TOKEN, "id": pais_id},
                dataType: 'JSON',
                success: function (response) {// What to do if we succeed
                    inputEstado.append('<option value="">Elije un equipo</option>')
                    $.each(response, function (key, value) {
                        inputEstado.append("<option value='" + value.id + "'>" + value.estado + "</option>");
                    });
                },
                error: function(response){
                    alert('Error'+response);
                }
            });
        }

        $('#estado_id').change(getMunicipio);
        function getMunicipio() {
            const estado_id = $('#estado_id').val();
            const inputMunicipio = $('#municipio_id')
            const url = '/admin/Municipio/json';
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: url,
                type: "POST",
                data: {_token: CSRF_TOKEN, "id": estado_id},
                dataType: 'JSON',
                success: function (response) {// What to do if we succeed
                    inputMunicipio.append('<option value="">Elije un equipo</option>')
                    $.each(response, function (key, value) {
                        inputMunicipio.append("<option value='" + value.id + "'>" + value.municipio + "</option>");
                    });
                },
                error: function(response){
                    alert('Error'+response);
                }
            });
        }

        $('#municipio_id').change(getSector);
        function getSector() {
            const municipio_id = $('#municipio_id').val();
            const inputLocalidad = $('#localidad_id')
            const url = '/admin/Localidad/json';
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: url,
                type: "POST",
                data: {_token: CSRF_TOKEN, "id": municipio_id},
                dataType: 'JSON',
                success: function (response) {// What to do if we succeed
                    inputLocalidad.append('<option value="">Elije un equipo</option>')
                    $.each(response, function (key, value) {
                        inputLocalidad.append("<option value='" + value.id + "'>" + value.sector + " - " + value.localidad +"</option>");
                    });
                },
                error: function(response){
                    alert('Error'+response);
                }
            });
        }

        $('#titulo').keyup(convertToSlug);
        function convertToSlug()
        {
            const texto = $('#titulo').val();
            var trims = $.trim(texto);
            var slug = trims.replace(/[^a-z0-9]/gi,'-').replace(/-+/g,'-').replace(/^-|-$/g);
            $('#slug').val(slug.toLowerCase());
        }
    </script>
@stop
