<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('main-page/images/logo.svg')}}" alt="Logo" style="height: 67px" /></a>
        <form action="#" class="searchform order-sm-start order-lg-last"></form>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <a href="{{route('index')}}" class="nav-link" style="background-color: #1056a8 !important">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link">Servicios</a>
                    <ul class="sub-menu">
                        <li class="dropdown-submenu">
                            <a href="javascript:void(0)">Sistemas de Gestión</a>
                            <ul class="sub-sub-menu">
                                <li><a href="{{route('iso9001')}}">ISO 9001:2015</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('gap_analisis')}}">GAP Análisis</a></li>
                        <li><a href="{{route('auditoria_interna')}}">Auditoría Interna</a></li>
                        <li><a href="{{route('capacitacion')}}">Capacitación</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="openVerificationModal(); return false;">Verifica tu
                        certificado</a>
                </li>
                <!-- NOVEDADES TÉCNICAS MOVIDA AQUÍ -->
                <li class="nav-item">
                    <a href="{{route('blog')}}" class="nav-link">Novedades técnicas</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('work')}}" class="nav-link">Trabaja con nosotros</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('contact')}}" class="nav-link">Contacto</a>
                </li>
            </ul>
        </div>
    </div>

    <style>
        /* ===============================
   ESTILOS BASE NAVBAR
================================ */
        .nav-item {
            position: relative;
        }

        /* Ajuste de tamaño y padding */
        .ftco-navbar-light .navbar-nav>.nav-item>.nav-link {
            padding-left: 15px !important;
            padding-right: 15px !important;
            font-size: 10px !important;
            margin-bottom: 0 !important;
        }

        /* Hover del ítem principal */
        .nav-item:hover>.nav-link {
            background-color: #1056a8 !important;
            color: white !important;
        }

        /* ===============================
   SUB MENU (primer nivel)
================================ */

        /* Submenu siempre presente pero oculto */
        .sub-menu {
            position: absolute;
            top: 100%;
            left: 0;

            background: #0e4e96;
            min-width: 170px;
            list-style: none;
            padding: 0;
            margin: 0;
            border-radius: 4px;

            opacity: 0;
            visibility: hidden;
            pointer-events: none;

            transition: opacity 0.15s ease;
            z-index: 9999;
        }

        /* Mostrar submenu al hover del LI */
        .nav-item.dropdown:hover>.sub-menu {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        /* Items del submenu */
        .sub-menu li a {
            display: block;
            padding: 10px 14px;
            color: white;
            text-decoration: none;
            white-space: nowrap;
            font-size: 12px;
        }

        .sub-menu li a:hover {
            background: #1056a8;
        }

        .sub-menu .sub-sub-menu li a {
            font-size: 12px;
        }

        /* ===============================
   SUB SUB MENU (segundo nivel)
================================ */
        .dropdown-submenu {
            position: relative;
        }

        /* Sub-sub-menu oculto */
        .sub-sub-menu {
            position: absolute;
            left: 100%;
            top: 0;

            background: #0e4e96;
            min-width: 170px;
            list-style: none;
            padding: 0;
            margin: 0;
            border-radius: 4px;

            opacity: 0;
            visibility: hidden;
            pointer-events: none;

            transition: opacity 0.15s ease;
            z-index: 10000;
        }

        /* Mostrar sub-sub-menu */
        .dropdown-submenu:hover>.sub-sub-menu {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        /* Items del sub-sub-menu */
        .sub-sub-menu li a {
            display: block;
            padding: 10px 14px;
            color: white;
            text-decoration: none;
            white-space: nowrap;
            font-size: 10px;
        }

        .sub-sub-menu li a:hover {
            background: #1056a8;
        }

        /* Flecha indicadora */
        .dropdown-submenu>a {
            position: relative;
        }

        .dropdown-submenu>a::after {
            content: "›";
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 16px;
        }

        /* ===============================
   FIX CRÍTICO PARA BOOTSTRAP
================================ */

        /* Evita el hueco que rompe el hover */
        .nav-item.dropdown>.nav-link {
            padding-bottom: 15px;
        }

        /* Permite que los menús se desplieguen sin corte */
        .sub-menu,
        .sub-sub-menu {
            overflow: visible;
        }


        /* NAVBAR STICKY PROFESIONAL */
        #ftco-navbar {
            
            
            width: 100%;
            z-index: 99999;
            transition: all 0.35s ease;
        }

        /* Espacio para que el contenido no quede debajo del menú */
        body {
            /* padding-top: 90px; */
            /* ajusta según altura de tu navbar */
        }

        /* Efecto cuando se hace scroll */
        /* Navbar premium al hacer scroll */
        #ftco-navbar.scrolled {
            


            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(11, 60, 120, 0.40) !important;
            backdrop-filter: blur(12px);
            box-shadow: 0 10px 40px rgba(0,0,0,.18);
        }

        /* Logo más pequeño y elegante */
        #ftco-navbar.scrolled img {
            height: 52px !important;
            transition: all 0.35s ease;
        }

        /* Links más legibles */
        #ftco-navbar.scrolled .nav-link {
            color: white !important;
            font-weight: 500;
        }

        /* Hover premium */
        #ftco-navbar.scrolled .nav-link:hover {
            background: rgba(255, 255, 255, 0.12) !important;
            border-radius: 4px;
        }
    </style>
</nav>
<script>
    window.addEventListener("scroll", function () {
  const navbar = document.getElementById("ftco-navbar");
  const topbar = document.querySelector(".wrap");

  if (window.scrollY > 80) {
    navbar.classList.add("scrolled");
    topbar.classList.add("hide-top");
  } else {
    navbar.classList.remove("scrolled");
    topbar.classList.remove("hide-top");
  }
});

</script>