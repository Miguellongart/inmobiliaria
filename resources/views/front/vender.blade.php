<x-app-layout>
    @section('cssfront')
        <link rel="stylesheet" href="{{ mix('css/vender.css') }}">
    @endsection
    <section class="banner-vender" style="background-image: url({{asset('front/img/fondo.png')}})">
        <h2 class="title-banner">¿Quieres vender?</h2>
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

    <section class="como-vender">
        <div class="container">
            <div class="row">
                <div class="contenido">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia optio exercitationem tempore vel. Corrupti dolorem officiis cupiditate beatae, doloremque, nihil necessitatibus incidunt nostrum pariatur perferendis culpa autem molestiae vitae obcaecati!</p><br>

                    <b>Lorem ipsum dolor sit amet consectetur adipisicing elit.</b><br><br>

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia optio exercitationem tempore vel. Corrupti dolorem officiis cupiditate beatae, doloremque, nihil necessitatibus incidunt nostrum pariatur perferendis culpa autem molestiae vitae obcaecati!<br><br>

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia optio exercitationem tempore vel. Corrupti dolorem officiis cupiditate beatae, doloremque, nihil necessitatibus incidunt nostrum pariatur perferendis culpa autem molestiae vitae obcaecati!<br><br>

                    <b>Lorem ipsum dolor sit amet consectetur adipisicing elit.</b><br><br>
                    <b>Lorem ipsum dolor sit amet consectetur adipisicing elit.</b><br><br>
                    <b>Lorem ipsum dolor sit amet consectetur adipisicing elit.</b><br><br>
                    <b>Lorem ipsum dolor sit amet consectetur adipisicing elit.</b><br><br>

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia optio exercitationem tempore vel. Corrupti dolorem officiis cupiditate beatae, doloremque, nihil necessitatibus incidunt nostrum pariatur perferendis culpa autem molestiae vitae obcaecati!<br><br>

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia optio exercitationem tempore vel. Corrupti dolorem officiis cupiditate beatae, doloremque, nihil necessitatibus incidunt nostrum pariatur perferendis culpa autem molestiae vitae obcaecati!</p>

                    <img src="{{asset('front/img/fondo.png')}}" class="d-block w-100" alt="">
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
