<x-app-layout>
    @section('cssfront')
        <link rel="stylesheet" href="{{ mix('css/contacto.css') }}">
        <link rel="stylesheet" href="{{ mix('css/proyectos.css') }}">
    @endsection
    <section class="banner-contacto" style="background-image: url({{asset('front/img/new/home1.png')}})">
        <h2 class="title-banner">"Oportunidaes para invertir o vivir"</h2>
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
    <div class="container my-4 py-3">
        <h3 class="text-center" style="font-family: Montserrat, sans-serif; font-size: 35px;font-weight: 700;color: var(--negro);">Contacto</h3>
        <div class="row mx-5 px-5">
           <p>En 17 años de Exitosa Labor, nos hemos especializado en el Diseño, Estructuración,
               Promoción y Venta de Proyectos Inmobiliarios del Sector Primario y Secundario.
               Estamos conformados por un grupo de Profesionales Universitarios,
               formados en distintas áreas de trabajo, que juntos, nos esforzamos día a día,
               por cumplir y lograr consolidar el direccionamiento estratégico de nuestra organización y de nuestras vidas.
           </p>
        </div>
    </div>
    <section class="contactanos">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1958.3919697881274!2d-63.821073998480635!3d10.979674549489447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c318efce47b4d85%3A0x2409248093273f7e!2sCalle%20Los%20Uveros%2C%20Porlamar%206301%2C%20Nueva%20Esparta%2C%20Venezuela!5e0!3m2!1ses-419!2sar!4v1619051845034!5m2!1ses-419!2sar" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="container">
            <div class="formulario">
                <h2>Contactanos</h2>
                <p>Llamenos por los teléfonos +58.295.2672918 / +58.414.7934963 / +58.416.6954083</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Nombre y Apellido">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="asunto" aria-describedby="emailHelp" placeholder="Asunto">
                    </div>
                    <div class="form-group">
                        <select name="" class="form-control" id="" style="width: 100%">
                            <option value="">Tipo de Servicio</option>
                            <option value="">Servicio 1</option>
                            <option value="">Servicio 1</option>
                            <option value="">Servicio 1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="mensaje" class="form-control" id="" rows="5" style="width: 100%"></textarea>
                    </div>
                    <button type="submit" class="btn btn-contacto">Enviar</button>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
