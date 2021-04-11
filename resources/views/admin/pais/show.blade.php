@extends('adminlte::page')

@section('title')
    {{$title}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex">
                            <h3 class="card-title">Listado de {{$title}}</h3>
                            <div class="btn-group ml-auto">
                                @can('admin.pais.edit')
                                    <a href="{{route('admin.pais.edit', $row->id)}}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>                                    
                                @endcan
                                @can('admin.pais.destroy')
                                <form action="{{route('admin.pais.destroy', $row->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="delete" class="btn btn-danger btn-flat">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>                                 
                                @endcan
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nombre</th>
                                        <th>Name</th>
                                        <th>Nom</th>
                                        <th>ISO2</th>
                                        <th>ISO3</th>
                                        <th>Codigo Postal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->nombre}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->nom}}</td>
                                        <td>{{$row->iso2}}</td>
                                        <td>{{$row->iso3}}</td>
                                        <td>{{$row->phone_code}}</td>
                                    </tr>
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
<script src="{{ mix('admin/js/admin.js') }}" defer></script>
<script>
    @include('admin.toastr')
</script>
@stop
