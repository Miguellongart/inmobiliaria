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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex">
                            <h3 class="card-title">Listado de {{$title}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Descripcion</th>
                                        <th>Guardia</th>
                                        <!--<th>Action</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($permisions)
                                        @foreach ($permisions as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->guard_name}}</td>
                                            <!--<td>
                                                <div class="btn-group">
                                                    <a href="{{route('admin.permissions.show', $item->id)}}" class="btn btn-sm btn-primary btn-flat">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </div>
                                            </td>-->
                                        </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')
    <script>
        $(document).ready(function() {
        $('#dataTable').DataTable({
                    responsive: true,
                    autoWidth: false,
                    order: [ 0, 'desc' ],
                    language: {
                            "zeroRecords": "No se encontró ningún curso",
                            "info": "Mostrando la página _PAGE_ de _PAGES_",
                            "infoEmpty": "No records available",
                            "infoFiltered": "(filtrado de _MAX_ registros totales)",
                            'search': 'Buscar:',
                            'paginate': {
                                'next': 'Siguiente',
                                'previous': 'Anterior'
                            }
                    }
                });
        } );
        @if(session()->has('success'))
            swal("Exito!!", "{{ session()->get('message') }}", "success");
        @endif
        @if(session()->has('danger'))
            swal("Exito!!", "{{ session()->get('danger') }}", "info");
        @endif
    </script>
@stop
