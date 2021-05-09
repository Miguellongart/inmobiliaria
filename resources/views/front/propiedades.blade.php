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
            <h3 style="color: var(--negro); text-transform: uppercase;text-align: center; font-size: 38px;margin-bottom: 10px"><b>Propiedades</b></h3>
            <div class="row justify-content-center">
                <form action="" class="buscadorPropiedades">
                    <div class="container">
                        <div class="row  justify-content-center">
                            <div class="form-group">
                                <input type="text" class="form-control" style="background-color: var(--amarillo);width: 120px; border: none; border-radius: 50px 0px 0px 50px" id="nombre" aria-describedby="emailHelp" placeholder="Nombre y Apellido">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" style="background-color: var(--amarillo);width: 120px; border: none;" id="nombre" aria-describedby="emailHelp" placeholder="Nombre y Apellido">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" style="background-color: var(--amarillo);width: 120px; border: none;" id="nombre" aria-describedby="emailHelp" placeholder="Nombre y Apellido">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" style="background-color: var(--amarillo);width: 120px; border: none;" id="nombre" aria-describedby="emailHelp" placeholder="Nombre y Apellido">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" style="background-color: var(--amarillo);width: 120px; border: none;" id="nombre" aria-describedby="emailHelp" placeholder="Nombre y Apellido">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" style="background-color: var(--amarillo);width: 120px; border: none;" id="nombre" aria-describedby="emailHelp" placeholder="Nombre y Apellido">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" style="background-color: var(--amarillo);width: 120px;border-radius: 0px 50px 50px 0px" id="nombre" aria-describedby="emailHelp" placeholder="Nombre y Apellido">
                            </div>
                        </div>
                        <div class="row justify-content-center" style="margin-top: -16px;">
                            <div class="form-group">
                                <input type="text" class="form-control" style="background-color: var(--amarillo);width: 120px; border: none; border-radius: 50px 0px 0px 50px" id="nombre" aria-describedby="emailHelp" placeholder="Codigo">
                            </div>
                            <div class="form-group">
                                <button class="btn" style="background-color: var(--rojo);width: 120px;border-radius: 0px 50px 50px 0px" >Buscar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                @foreach($propiedades as $prop)
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3 mt-3">
                        <a href="{{route('front.detailprop', $prop->slug)}}" style="text-decoration: none">
                            <div class="card">
                                <img src="{{asset($prop->imagen_p)}}" class="card-img-top" alt="casa en la montaña">
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
