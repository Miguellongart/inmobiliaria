<x-app-layout>
    <section class="banner-home con" style="background-image: url({{asset('front/img/fondo.png')}})">
        <div class="container">
            <div class="redes d-flex flex-column justify-content-end">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-whatsapp"></i></a>
                <a href=""><i class="fab fa-telegram-plane"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fas fa-phone-alt"></i></a>
            </div>
            @include('buscador')
        </div>
    </section>

    <section class="destacados">
        <div class="container">
            <h2 class="text-center m-2 titulos">Destacados</h2>
            <div class="row">
                @foreach($propiedades as $prop)
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                    <a href="{{route('front.detailprop', $prop->slug)}}" style="text-decoration: none">
                        <div class="card">
                            <div class="image" style="margin: 7px;">
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
           <div class="row">
                @foreach($proyectos as $prop)
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-3">
                    <a href="{{route('front.detailproy', $prop->slug)}}" style="text-decoration: none">
                        <div class="card">
                            <div class="image" style="margin: 7px;">
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
            <div class="row contenido">
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
                                <option value="">Servicio</option>
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
            <h2 class="text-center m-2 titulos">Nuevos Proyectos</h2>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-3">
                    <div class="card">
                        <div class="image" style="margin: 7px;">
                            <img src="{{asset('front/img/fondo.png')}}" class="card-img-top" alt="casa en la montaña">
                        </div>
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
                        <div class="image" style="margin: 7px;">
                            <img src="{{asset('front/img/fondo.png')}}" class="card-img-top" alt="casa en la montaña">
                        </div>
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
                        <div class="image" style="margin: 7px;">
                            <img src="{{asset('front/img/fondo.png')}}" class="card-img-top" alt="casa en la montaña">
                        </div>
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
