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
                                @can('admin.t_operacion.edit')
                                    <a href="{{route('admin.t_operacion.edit', $row->id)}}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>                                    
                                @endcan
                                @can('admin.t_operacion.destroy')
                                <form action="{{route('admin.t_operacion.destroy', $row->id)}}" method="POST">
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
                                        <th>tipo Operacion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->tipo_operacion}}</td>
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
    <script>
        <script src="{{ mix('admin/js/admin.js') }}" defer></script>
        @if(session()->has('success'))
            Toast.fire({
                icon: 'success',
                title: '{{ session()->get('success') }}'
            })
        @endif
        @if(session()->has('danger'))
            Toast.fire({
                icon: 'danger',
                title: '{{ session()->get('danger') }}'
            })
        @endif
    </script>
@stop