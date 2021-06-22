<x-app-layout>
    @section('cssfront')
        <link rel="stylesheet" href="{{ mix('css/propiedades.css') }}">
    @endsection
    <!--<section class="banner-proyecto" style="background-image: url({{asset('front/img/bannerproyectos.jpg')}})">
        <h2 class="title-banner">"Oportunidades para Invertir o vivir"</h2>
        <div class="container">
            <div class="redes d-flex flex-column justify-content-end">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fab fa-telegram-plane"></i>
                <i class="fab fa-instagram"></i>
                <i class="fas fa-phone-alt"></i>
            </div>
        </div>
    </section>-->

    <section class="propiedades">
        <div class="container">
            <h3 class="titulos my-3">Propiedades</h3>
            <div class="row justify-content-center">
                <form action="" class="buscadorPropiedades my-5">
                    <div class="container">
                        <div class="row  justify-content-center">
                            @csrf
                            <div class="container">
                                <div class="d-none d-sm-none d-md-block d-lg-block d-xl-block">
                                    <div class="row  justify-content-center">
                                        <div class="form-group">
                                            <select name="toperacion" id="select_izq">
                                                <option value="">Operacion</option>
                                                @foreach($toperacion as $item)
                                                    <option value="{{$item->id}}">{{$item->tipo_operacion}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="tpropiedad" id="select">
                                                <option value="">Propiedad</option>
                                                @foreach($tpropiedad as $item)
                                                    <option value="{{$item->id}}">{{$item->tipo_propiedad}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="pais" id="select">
                                                <option value="">Pais</option>
                                                @foreach($pais as $item)
                                                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="estado" id="select">
                                                <option value="">Estado</option>
                                                @foreach($estado as $item)
                                                    <option value="{{$item->id}}">{{$item->estado}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="municipio" id="select">
                                                <option value="">Municipio</option>
                                                @foreach($municipio as $item)
                                                    <option value="{{$item->id}}">{{$item->municipio}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="sector" id="select_der">
                                                <option value="">Sector</option>
                                                @foreach($sector as $item)
                                                    <option value="{{$item->id}}">{{$item->sector}}-{{$item->localidad}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center" style="margin-top: -18px;">
                                        <div class="form-group">
                                            <input name="codigo" type="text" id="select_izq_neg" placeholder="Codigo">
                                        </div>
                                        <div class="form-group">
                                            <select name="estado_propiedad" id="select">
                                                <option value="">Estado Obra</option>
                                                <option value="Obra Gris">Obra Gris</option>
                                                <option value="Obra blanca">Obra blanca</option>
                                                <option value="Lista para habitar">Lista para habitar</option>
                                                <option value="A reformar">A reformar</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input name="total_terreno" type="text" placeholder="# terreno">
                                        </div>
                                        <div class="form-group">
                                            <input name="area_construccion" type="text" placeholder="# const">
                                        </div>
                                        <div class="form-group">
                                            <input name="habitaciones" type="text" placeholder="N° Hab">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn" id="btn_buscar">Buscar</button>
                                        </div>
                                    </div>
                                </div>
                                <!--Mobile version-->
                                <div class="d-block d-sm-block d-md-none d-lg-none d-xl-none">
                                    <div class="row  justify-content-center">
                                        <div class="form-group">
                                            <select name="toperacion" id="select_izq">
                                                <option value="">Tipo operacion</option>
                                                @foreach($toperacion as $item)
                                                    <option value="{{$item->id}}">{{$item->tipo_operacion}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="tpropiedad"  id="select_der" >
                                                <option value="">Tipo propiedad</option>
                                                @foreach($tpropiedad as $item)
                                                    <option value="{{$item->id}}">{{$item->tipo_propiedad}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center" style="margin-top: -18px;">
                                        <div class="form-group">
                                            <input name="codigo" id="select_izq" type="text" placeholder="Codigo">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn" id="btn_buscar">Buscar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                @foreach($propiedades as $prop)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-3">
                        <a href="{{route('front.detailprop', $prop->slug)}}" style="text-decoration: none">
                            <div class="card">
                                <div class="image" style="margin: 4px;">
                                    <img src="{{asset($prop->imagen_p)}}" class="card-img-top" alt="casa en la montaña">
                                </div>
                                <div class="card-body">
                                    <p class="card-text mb-2">Edificio</p>
                                    <p>Habitaciones  <b>{{$prop->n_habitacion}}-<i class="fas fa-bed"></i></b></p>
                                    <p>baño <b>{{$prop->n_bano}}-<i class="fas fa-bath"></i></b></p>
                                    <p>Estacionamientos <b>{{$prop->n_estacionamiento}}  <i class="fas fa-car"></i></b></p>
                                    <p>Antiguedad <b>{{$prop->antiguedad}}</b></p>
                                    <p>Vista <b>{{$prop->t_vista}}</b></p>
                                    <p class="prop mt-3">PROP. N° {{$prop->codigo}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {!! $propiedades->links() !!}
            </div>
        </div>
    </section>
</x-app-layout>
