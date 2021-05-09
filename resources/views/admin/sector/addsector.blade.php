@extends('adminlte::page')

@section('title')
    {{$title}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
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
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{route('admin.sector.store')}}">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-4 col-md-4 col-sm-12">
                                        <label>Seleccionar Municipio</label>
                                        <select name="municipio_id" class="custom-select" id="select_2">
                                                <option value="{{$municipio->id}}">
                                                    {{$municipio->municipio}}
                                                </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-4 col-md-4 col-sm-12">
                                        <label for="sector">Sector</label>
                                        <input type="text" class="form-control" name="sector" value="{{old('sector',$row->sector)}}" id="sector" placeholder="Sector">
                                    </div>
                                    <div class="form-group col-4 col-md-4 col-sm-12">
                                        <label for="localidad">Localidad</label>
                                        <input type="text" class="form-control" name="localidad" value="{{old('localidad',$row->localidad)}}" id="municipio" placeholder="Localidad">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="{{route('admin.sector.index')}}" class="btn btn-danger">Cancelar</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')
    <script>
        $("#select_2").select2();
    </script>
@stop
