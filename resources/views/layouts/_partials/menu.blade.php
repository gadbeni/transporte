<div id="preloader"></div>

<!--==========================
Hero Section
============================-->
{{-- <section id="hero">
    <div class="hero-container">
        <div class="wow fadeIn">
            <div class="hero-logo">
                <img class="" src="{{asset('lib/img/logo.png')}}" alt="ProOnliPc">
            </div>

            <h1>Bienvenidos de da tu servidor TRANSPORTE</h1>
            <h2>nosotros creamos <span class="rotating">nosotros viajamos por todo el departamento del Beni</span></h2>
            <div class="actions">
                <a href="#about" class="btn-get-started">Empezar</a>
                <a href="#services" class="btn-services">Nuestros Servicios</a>
            </div>
        </div>
    </div>
</section>  --}}

 <!--==========================
  Sección de encabezado
  ============================-->
  
<header style="background: #098429" id="header">
    <div class="container">
        <div id="logo" class="pull-left">
        <a href="{{ route('login') }}"><img src="{{asset('images/lgt.png')}}" alt="de" title=""  width="150" height="200"/></img></a>
        <!-- Descomenta abajo si prefieres usar una imagen de texto -->
        <!--<h1><a href="#hero">Encabezado 1</a></h1>-->
        </div>
        <nav  id="nav-menu-container">
        <ul class="nav-menu">
            <li><a href="{{ route('login') }}">Inicio</a></li>
            <li><a href="#about">Buscar</a></li>
            {{-- <li><a href="#services">Servicios</a></li> --}}
            {{-- <li><a href="#portfolio">Provincias</a></li> --}}
            <li><a href="#testimonials">Testimonios</a></li>
            {{-- <li><a href="#team">Equipo</a></li> --}}
            <li><a href="#contact">Contacto</a></li>
        </ul>
        </nav>
        <!-- #nav-menu-container -->
    </div>
</header>
    <!-- #header -->
