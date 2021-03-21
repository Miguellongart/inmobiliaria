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
                            @can('admin.user.create')
                                <a href="{{route('admin.rol.create')}}" class="btn btn-sm btn-success ml-auto">
                                    <i class="fas fa-plus"></i>
                                </a>                            
                            @endcan
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Guardia</th>
                                        @canany(['admin.rol.show','admin.rol.edit','admin.user.destroy'])
                                        <th>Action</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($roles)
                                        @foreach ($roles as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->guard_name}}</td>
                                            @canany(['admin.rol.show','admin.rol.edit','admin.user.destroy'])
                                            <td>
                                                <div class="btn-group">
                                                    @can('admin.rol.show')
                                                    <a href="{{route('admin.rol.show', $item->id)}}" class="btn btn-info btn-flat">
                                                        <i class="far fa-eye"></i>
                                                    </a> 
                                                    @endcan
                                                    @can('admin.rol.edit')
                                                    <a href="{{route('admin.rol.edit', $item->id)}}" class="btn btn-primary btn-flat">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    @endcan
                                                    @can('admin.rol.destroy')
                                                    <form action="{{route('admin.rol.destroy', $item->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" title="delete" class="btn btn-danger btn-flat">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                    @endcan
                                                </div>
                                            </td>
                                            @endcan
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
        });
        @if(session()->has('success'))
            swal("Exito!!", '{{ session()->get('message') }}', "success");
        @endif
        @if(session()->has('danger'))
            swal("Exito!!", '{{ session()->get('danger') }}', "info");
        @endif
    </script>
@stop
