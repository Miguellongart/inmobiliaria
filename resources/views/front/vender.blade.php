<x-app-layout>
    @section('cssfront')
        <link rel="stylesheet" href="{{ mix('css/vender.css') }}">
    @endsection
    <section class="banner-vender" style="background-image: url({{asset('front/img/quieresvender.jpg')}})">
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

    <section class="como-vender">
        <div class="container">
            <div class="row">
                <div class="contenido">
                    <p>Tomar la decisión de vender o alquilar su inmueble va más allá de publicar un simple anuncio, es garantizarle un proceso seguro tanto para Ud. como para sus compradores, por ello le ofrecemos la asesoría necesaria y el respaldo de más de 17 años de experiencia en el mercado local y nacional.</p><br>

                    <b>Para apoyar y agilizar su gestión, le recomendamos actualizar la siguiente documentación:</b><br><br>

                   <ul>
                       <li>Copia del Documento de Propiedad del inmueble.</li>
                       <li>Copia de la cédula de identidad propietario.</li>
                       <li>Copia de la última solvencia cancelada en la alcaldía municipal correspondiente donde se especifique el número de la ficha catastral del inmueble.</li>
                       <li>Solvencia de Condominio.</li>
                       <li>Solvencia de Hidrocaribe.</li>
                       <li>Solvencia de Corpoelec.</li>
                       <li>Solvencia de Aseo.</li>
                       <li>Copia del registro de vivienda principal en caso de que el inmueble lo posea.</li>
                       <li>Copia del Permiso de Construcción aprobado. (Sólo pre-ventas).</li>
                       <li>Acta estatutaria Compañía Constructora. (Sólo pre-ventas y si es el propietario es una figura juridica).</li>
                       <li>Copia de las tres ultimas declaraciones de impuestos.</li>
                       <li>Solvencia del Seguro social obligatorio.</li>
                       <li>Copia soportes de pagos realizados antes de la protocolización. </li>
                       <li>(Se aplica en ventas con opciones a compra y pre-venta).</li>
                   </ul>
                    <br><br>
                    <p>
                        Es importante resaltar que los vendedores deberán cancelar la respectivas formas del SENIAT que se refiere al monto de venta y solo será cancelado cuando la venta supera las 55 unidades tributarias y del cual solo podrán exonerase aquellos inmuebles que estén registrados como vivienda principal.

                        En el caso de los compradores, les corresponderá cancelar, honorarios profesionales de abogado, derechos registrales, timbres fiscales y Tasa municipal imputable al comprador, la cual nunca superara las cinco(5) unidades tributarias, y que serán solicitados, para la operación de venta en registro.

                        Toda la información anterior deberá confirmarla directamente con unos de nuestros asesores y así garantizar un proceso seguro y fluido para la venta o alquiler de su propiedad.
                    </p>
                    <img src="{{asset('front/img/fondo.png')}}" class="d-block w-100" alt="">
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
