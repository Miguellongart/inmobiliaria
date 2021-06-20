<x-app-layout>
    @section('cssfront')
        <link rel="stylesheet" href="{{ mix('css/proyectos.css') }}">
    @endsection
    <section class="banner-proyecto" style="background-image: url({{asset('front/img/bannerproyectos.jpg')}})">
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
    </section>

    <section class="proyectos">
        <div class="container">
            <div class="row">
                <div class="contenido">
                    @foreach ($proyectos as $item)
                        <a href="{{route('front.detailproy', $item->slug)}}" style="text-decoration: none">
                            <div class="card mb-3" style="width: 100%;">
                                <div class="row no-gutters">
                                    <div class="col-md-6" style="height: 250px;">
                                        <img src="{{asset($item->imagen_p)}}" class="d-block w-100" alt="{{$item->imagen_p}}">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$item->titulo}}</h5>
                                            <p class="card-text">{!!$item->descripcion!!}</p><br>
                                            <p class="card-text mt-3">
                                                <span>{{$item->total_terreno}}</span>
                                                <span><i class="fas fa-user"></i> {{$item->total_terreno}}</span>
                                                <span><i class="fas fa-tint"></i> {{$item->n_agua }} listros</span>
                                                <span><i class="fas fa-car-side"></i> {{$item->n_estacionamiento}}</span>
                                            </p>
                                            <div class="card-body">
                                                <div class="row justify-content-between">
                                                    <div>
                                                        <span>Mas informacion</span>
                                                    </div>
                                                    <div>
                                                        <i class="fas fa-star favorito"></i>
                                                        <button class="btn btn-sm contactar">Contactar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
