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
                        <li class="breadcrumb-item active"><a href="{{route('admin.users.index')}}">{{$title}}</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile.user.img img-fluid img-circle" src="{{ auth()->user()->profile_photo_url}}" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">{{$user->name}}</h3>
                            <p class="text-muted text-center">{{$user->email}}</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                @if (auth()->user()->can('admin.user.edit') ||
                    auth()->user()->can('admin.assign.roles') ||
                    auth()->user()->can('admin.assign.permissions')
                )
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                @can(['admin.user.edit'])
                                <li class="nav-item"><a class="nav-link active" href="#actualizar" data-toggle="tab">Actualizar</a></li>
                                @endcan
                                @can(['admin.assign.roles'])
                                <li class="nav-item"><a class="nav-link" href="#roles" data-toggle="tab">Roles</a></li>
                                @endcan
                                @can('admin.assign.permissions')
                                <li class="nav-item"><a class="nav-link" href="#permisos" data-toggle="tab">Permisos</a></li>
                                @endcan
                            </ul>
                        </div><!-- /.card-header -->

                        <div class="card-body">
                            <div class="tab-content">
                                @can(['admin.user.edit'])
                                <div class="active tab-pane" id="actualizar">
                                    <form action="{{route('admin.users.update', $user->id )}}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="row">
                                            <div class="form-group col-6 col-md-6 col-sm-12">
                                                <label for="name">Nombre</label>
                                                <input type="text" class="form-control" name="name" value="{{old('name',$user->name)}}" id="name">
                                            </div>
                                            <div class="form-group col-6 col-md-6 col-sm-12">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control" name="email" value="{{old('email',$user->email)}}" id="email">
                                            </div>
                                        </div>
                                        <button class="btn btn-sm btn-success" type="submit">Guardar</button>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                                @endcan
                                @can(['admin.assign.roles'])
                                <div class="tab-pane" id="roles">
                                    <form action="{{route('users.role', $user->id )}}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            @foreach($roles as $role)
                                                <div class="form-check">
                                                    <input class="form-check-input"
                                                           name="roles[]"
                                                           @if($user->hasRole($role->id)) checked  @endif
                                                           value="{{old('roles',$role->id)}}"
                                                           type="checkbox">

                                                    <label class="form-check-label">{{$role->name}}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                                @endcan
                                @can('admin.assign.permissions')
                                <div class="tab-pane" id="permisos">
                                    <form class="form-horizontal" action="{{route('users.permission', $user->id )}}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            @foreach($permissions as $p)
                                                <div class="form-check">
                                                    <input class="form-check-input" name="permissions[]" 
                                                        @if($user->hasPermissionTo($p->id)) checked @endif 
                                                        value="{{old('permission',$p->id)}}" type="checkbox">
                                                    <label class="form-check-label">{{$p->description}}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                                @endcan
                            </div>
                            <!-- /.tab-content -->
                        </div>
                            <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>
                @endif
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@stop

@section('js')
<script src="{{ mix('admin/js/admin.js') }}" defer></script>
<script>
    @include('admin.toastr')
</script>
@stop
