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
                            @can('admin.user.create')
                                <a href="{{route('admin.users.create')}}" class="btn btn-sm btn-success ml-auto">
                                    <i class="fas fa-plus"></i>
                                </a>                                
                            @endcan
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        @canany(['admin.user.show', 'admin.user.destroy'])
                                        <th>Action</th>                       
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($users)
                                        @foreach ($users as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->email}}</td>
                                            @canany(['admin.user.edit', 'admin.user.destroy'])
                                            <td>
                                                <div class="btn-group">
                                                    @can('admin.user.edit')
                                                    <a href="{{route('admin.users.show', $item->id)}}" class="btn btn-info btn-flat">
                                                        <i class="far fa-eye"></i>
                                                    </a>                            
                                                    @endcan
                                                    @can('admin.user.destroy')
                                                    <form action="{{route('admin.users.destroy', $item->id)}}" method="POST">
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
<script src="{{ mix('admin/js/admin.js') }}" defer></script>
<script>
    @include('admin.toastr')
</script>
@stop
