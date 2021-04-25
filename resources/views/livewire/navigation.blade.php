<div class="nav-wrapper">
    <nav class="navbar-grid">
        <img src="{{asset('front/img/LogoNav.png')}}" alt="Company Logo">
        <div class="menu-toggle-grid" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="nav-grid">
            <li class="nav-item-grid"><a href="/">Inicio</a></li>
            <li class="nav-item-grid"><a href="{{route('front.proyectos')}}">Proyecto</a></li>
            <li class="nav-item-grid"><a href="{{route('front.vender')}}">Vender</a></li>
            <li class="nav-item-grid"><a href="{{route('front.servicios')}}">Servicio</a></li>
            <li class="nav-item-grid"><a href="{{route('front.contacto')}}">Contacto</a></li>
            @auth
                <img class="img-profile" src="{{ auth()->user()->profile_photo_url}}" alt="">
                <li class="nav-item-grid"><a href="">{{ auth()->user()->name}}</a></li>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li class="nav-item-grid">
                        <a href="" onclick="event.preventDefault();
                        this.closest('form').submit();">
                            <i class="fas fa-power-off"></i>
                        </a>
                    </li>
                </form>
            @else
                <li class="nav-item-grid"><a href="{{route('login')}}">Login</a></li>
            @endauth
        </ul>
    </nav>
</div>
