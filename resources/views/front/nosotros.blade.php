<x-app-layout>
    @section('cssfront')
        <link rel="stylesheet" href="{{ mix('css/nosotro.css') }}">
    @endsection
    <section class="banner-contacto" style="background-image: url({{asset('front/img/new/quienes_somos.jpg')}})">
        <h2 class="title-banner">"Sobre Nosotros"</h2>
        <div class="container">
            <div class="redes d-flex flex-column justify-content-end">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-whatsapp"></i></a>
                <a href=""><i class="fab fa-telegram-plane"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fas fa-phone-alt"></i></a>
            </div>
        </div>
    </section>
</x-app-layout>
