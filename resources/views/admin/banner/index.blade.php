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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex">
                            <h3 class="card-title">Listado de {{$title}}</h3>
                            @can('admin.empresa.create')
                                <button type="button" class="btn btn-sm btn-success ml-auto" data-toggle="modal" data-target="#crearbanner">
                                <i class="fas fa-plus"></i>
                              </button>
                            @endcan
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>titulo (es)</th>
                                        <th>title (en)</th>
                                        <th>Imagen</th>
                                        <th>Pagina</th>
                                        <th>estatus</th>
                                        @canany(['admin.empresa.edit', 'admin.empresa.destroy'])
                                        <th>Action</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($rows)
                                        @foreach ($rows as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->titulo_es}}</td>
                                            <td>{{$row->titulo_en}}</td>
                                            <td>{{$row->image}}</td>
                                            <td>{{$row->page}}</td>
                                            <td>{{($row->estatus == 1)?"Habilitado":"desabilitado"}}</td>
                                            @canany(['admin.empresa.edit', 'admin.empresa.destroy'])
                                            <td>
                                                <div class="btn-group">
                                                    @can('admin.empresa.edit')
                                                    <a href="#" class="btn btn-info btn-flat" id="edit-customer" data-toggle="modal" data-id="{{ $row->id }}">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    @endcan
                                                    @can('admin.empresa.destroy')
                                                    <form action="{{route('admin.empresa.destroy', $row->id)}}" method="POST">
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

        @include('admin.banner.modal')
    </section>
@stop

@section('js')
    <script src="{{ mix('admin/js/admin.js') }}" defer></script>
    <script>
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

        CKEDITOR.replace( 'descripcion_es' );

        $('body').on('click', '#edit-customer', function () {
            var row_id = $(this).data('id');
            $.get('Banners/'+row_id+'/edit', function (data) {
                console.log(data.estatus)
                $('#customerCrudModal').html("Modificar Banner"+data.titulo);
                $('#btn-update').val("Update");
                $('#btn-save').prop('disabled',false);
                $('#editarempresa').modal('show');
                $('#cust_id').val(data.id);
                $('#titulo_es').val(data.titulo_es);
                $('#titulo_en').val(data.titulo_en);
                $('#page').val(data.page);
                $('#image').val(data.image);
                (data.estatus == 1) ? $("#customRadio1").prop("checked", true) : $("#customRadio2").prop("checked", true);
            })
        });
    </script>
@stop
