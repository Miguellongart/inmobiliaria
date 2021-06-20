<x-app-layout>
    <section class="banner-home con" style="background-image: url({{asset('front/img/fondo.png')}})">
        <div class="container">
            <div class="redes d-flex flex-column justify-content-end">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fab fa-telegram-plane"></i>
                <i class="fab fa-instagram"></i>
                <i class="fas fa-phone-alt"></i>
            </div>
            <form action="{{route('front.buscador')}}" method="post" class="buscador">
                @csrf
                <div class="container">
                    <div class="d-none d-sm-none d-md-block d-lg-block d-xl-block">
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
                                <select name="tpropiedad" id="select">
                                    <option value="">Tipo propiedad</option>
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
                                <select name="estado_propiedad" id="select_izq">
                                    <option value="">Estado Obra</option>
                                    <option value="Obra Gris">Obra Gris</option>
                                    <option value="Obra blanca">Obra blanca</option>
                                    <option value="Lista para habitar">Lista para habitar</option>
                                    <option value="A reformar">A reformar</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input name="total_terreno" type="text" placeholder="Totalidad del terreno">
                            </div>
                            <div class="form-group">
                                <input name="area_construccion" type="text"  placeholder="Área de construcción">
                            </div>
                            <div class="form-group">
                                <input name="habitaciones" type="text" placeholder="N° Habitaciones">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn" id="btn_buscar">Buscar</button>
                            </div>
                        </div>
                    </div>
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
            </form>
        </div>
    </section>

    <section class="destacados">
        <div class="container">
            <h2 class="text-center m-2" style="color: var(--negro); text-transform: uppercase;text-align: center; font-size: 38px;margin-bottom: 10px;font-weight: 700">Destacados</h2>
            <div class="row">
                @foreach($propiedades as $prop)
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 mt-3">
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
        </div>
    </section>

    <section class="banner-home-medio" style="background-image: url({{asset('front/img/Hacemos.jpg')}})">
        <h2 class="title-banner">"Hacemos tus sueño Inmobiliario realidad"</h2>
    </section>

    <section class="new-inmobiliaria">
        <div class="container">
            <h2 class="text-center m-2" style="color: var(--negro); text-transform: uppercase;text-align: center; font-size: 38px;margin-bottom: 10px;font-weight: 700">Nuevos Proyectos</h2>
            <div class="row">
                @foreach($proyectos as $prop)
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-3">
                    <a href="{{route('front.detailproy', $prop->slug)}}" style="text-decoration: none">
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
            <a href="{{route('front.proyectos')}}" class="btn btn-sm mt-5 align-content-center" style="background: var(--amarillo);color: var(--negro);">Ver mas</a>
        </div>
    </section>

    <section class="contacto" style="background-image: url({{asset('front/img/contactanos.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <h2>Contactanos</h2>
                    <h4>Un equipo de especialistas inmobiliarios le espera para atenderle</h4>
                    <i class="fas fa-map-marked-alt"></i> <span> Oficinas: Urbanización Costa Azul, calle los Uveros, VENETUR (Antiguo Hotel Margarita Hilton) local No 15. Porlamar. Isla de Margarita.</span> <br>
                    <i class="fas fa-phone-alt"></i> <span>Telefonos:  +58-412-222-22-22/+58-412-222-22-22/+58-412-222-22-22</span> <br>
                    <i class="fas fa-envelope"></i> <span>Correo: Ventas@carolinaflores.com.ve</span> <br>
                    <form style="background-color: #c5c5c596;padding: 10px; border-radius: 10px; box-shadow: 1px 1px 1px rgba(128,128,128,0.89)">
                        <div class="form-group">
                            <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Nombre y Apellido">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="asunto" aria-describedby="emailHelp" placeholder="Asunto">
                        </div>
                        <div class="form-group">
                            <select name="" id="" style="width: 100%">
                                <option value="">Tipo de Servicio</option>
                                <option value="">Servicio 1</option>
                                <option value="">Servicio 1</option>
                                <option value="">Servicio 1</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="mensaje" id="" rows="3" style="width: 100%"></textarea>
                        </div>
                        <button type="submit" class="btn btn-contacto" style="background-color: var(--amarillo);color: black; border: 1px solid black">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="new-proyect">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-3">
                    <div class="card">
                        <img src="{{asset('front/img/fondo.png')}}" class="card-img-top" alt="casa en la montaña">
                        <div class="card-body">
                            <p class="card-text mb-2">Edificio</p>
                            <p>2 Habitaciones <i class="fas fa-bed"></i></p>
                            <p>1 baño <i class="fas fa-bath"></i></p>
                            <p>2 Estacionamientos <i class="fas fa-car"></i></p>
                            <p>Antiguedad</p>
                            <p>Vista</p>
                            <p class="prop mt-3">PROP. N° 297</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-3">
                    <div class="card">
                        <img src="{{asset('front/img/fondo.png')}}" class="card-img-top" alt="casa en la montaña">
                        <div class="card-body">
                            <p class="card-text mb-2">Edificio</p>
                            <p>2 Habitaciones <i class="fas fa-bed"></i></p>
                            <p>1 baño <i class="fas fa-bath"></i></p>
                            <p>2 Estacionamientos <i class="fas fa-car"></i></p>
                            <p>Antiguedad</p>
                            <p>Vista</p>
                            <p class="prop mt-3">PROP. N° 297</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-3">
                    <div class="card">
                        <img src="{{asset('front/img/fondo.png')}}" class="card-img-top" alt="casa en la montaña">
                        <div class="card-body">
                            <p class="card-text mb-2">Edificio</p>
                            <p>2 Habitaciones <i class="fas fa-bed"></i></p>
                            <p>1 baño <i class="fas fa-bath"></i></p>
                            <p>2 Estacionamientos <i class="fas fa-car"></i></p>
                            <p>Antiguedad</p>
                            <p>Vista</p>
                            <p class="prop mt-3">PROP. N° 297</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
