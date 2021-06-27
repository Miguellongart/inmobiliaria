<x-app-layout>
    @section('cssfront')
        <link rel="stylesheet" href="{{ mix('css/detallePropiedad.css') }}">
    @endsection
    <section class="detallePropiedad">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-5">
                    <img class="imagen_p" src="{{asset($detalleProp->imagen_p)}}" alt="{{$detalleProp->titulo}}">
                    <div class="row">
                        <div class="wrapper">
                            <div class="carousel owl-carousel" id="detallePropiedad">
                                @foreach($detalleProp->galeria as $gal)
                                    <div class="card">
                                        <img src="{{asset('img/galeria/'.$gal->imagen)}}" class="card-img-top" alt="...">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7">
                    <h1>{{$detalleProp->titulo}}</h1>
                    <div class="d-flex justify-content-between info">
                        <span class="red">PROP N# {{$detalleProp->codigo}}</span>
                        <span class="red">Precio BsS {{$detalleProp->precio_BS}}</span>
                        <span class="red">Precio Pt {{$detalleProp->precio_PTS}}</span>
                        <p>Vendedor: <b>{{$detalleProp->user['name']}}</b></p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between info">
                        <p>Habitaciones: <b>{{$detalleProp->n_habitacion}}</b></p>
                        <p>Antiguedad: <b>{{$detalleProp->antiguedad}}</b></p>
                        <p>Baños: <b>{{$detalleProp->n_bano}}</b></p>
                        <p>Tipo Vista: <b>{{$detalleProp->t_vista}}</b></p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between info">
                        <p>Estado propiedad: <b>{{$detalleProp->estado_propiedad}}</b></p>
                        <p>Area de construccion: <b>{{$detalleProp->area_construccion}}-Mts2</b></p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between info">
                        <p>Estacionamiento: <b>{{$detalleProp->n_estacionamiento}}</b></p>
                        <p>Total De Terreno <b>{{$detalleProp->total_terreno}}-Mts2</b></p>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            Instalaciones <br>
                            @foreach($detalleProp->instalacion_tag as $tag)
                                <div class="form-check col-12 col-sm-12 col-md-12">
                                    <ul>
                                        <li>
                                            <i class="fas fa-arrow-right"></i>
                                            <a href="" style="text-decoration: none">{{ $tag->instalacion }} </a>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach<br><br>
                        </div>
                        <div class="col-12 col-md-6">
                            Adicionales <br>
                            @foreach($detalleProp->adicional_tag as $tag)
                                <div class="form-check col-12 col-sm-12 col-md-12">
                                    <ul>
                                        <li>
                                            <i class="fas fa-arrow-right"></i>
                                            <a href="" style="text-decoration: none">{{ $tag->adicional }} </a>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach<br><br>
                        </div>
                        <div class="col-12 col-md-6">
                            Facilidades y Cercanias <br>
                            @foreach($detalleProp->Facilidad_tag as $tag)
                                <div class="form-check col-12 col-sm-12 col-md-12">
                                    <ul>
                                        <li>
                                            <i class="fas fa-arrow-right"></i>
                                            <a href="" style="text-decoration: none">{{ $tag->facilidad }} </a>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach<br><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <p>{!! $detalleProp->descripcion !!}</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
