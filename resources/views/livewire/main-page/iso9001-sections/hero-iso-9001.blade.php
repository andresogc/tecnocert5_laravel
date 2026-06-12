<style>
    .hero-iso-bg {
        background-image: url('{{ asset("main-page/images/banner_iso.webp") }}');
    }

    @media (max-width: 767.98px) {
        .hero-iso-bg {
            background-image: url('{{ asset("main-page/images/mobile/banner_iso_mobile.webp") }}') !important;
        }

        /* Centrado Vertical: forzamos que la fila ocupe el alto y centre el contenido */
        .hero-iso-bg .slider-text {
            align-items: center !important;
        }

        /* Centrado Horizontal y reseteo de espacios */
        .hero-iso-bg .col-md-9 {
            justify-content: center !important;
            margin-top: 0 !important;
            padding-bottom: 0 !important;
        }

        /* Ancho completo y quitar padding inferior */
        .hero-iso-bg .text {
            width: 100% !important;
            padding-bottom: 0 !important;
        }
    }
</style>
  <!-- Hero Section Start -->
  <section class="hero-wrap hero-wrap-2 hero-iso-bg">
    <div id="particles-js" ></div>
    <!-- <div class="overlay"></div> -->
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5" style="display: flex;
        justify-content: end;    margin-top: 60px;
    ">
          <p class="breadcrumbs mb-2">
            <span class="mr-2"><a href="{{route('index')}}"><!-- Inicio --> <i class="ion-ios-arrow-forward"></i></a></span>
            <span><!-- Certificación de Sistemas de Gestión --><i class="ion-ios-arrow-forward"></i></span>
          </p>
          <h1 class="mb-0 bread"><!-- ISO 9001:2015 --></h1>


          <div class="text w-100 text-center" style="padding-bottom: 40px;width: 60% !important;">
            <h2 style="font-size: 16px;
              text-transform: uppercase;
              letter-spacing: 2px;
              font-family: 'Poppins', Arial, sans-serif;
              font-weight: 600;
              color: #1ce4de;
              display: inline-block;
              position: relative;
              letter-spacing: 4px;">SISTEMAS DE GESTIÓN</h2>
            <h1 class="mb-4" style="font-size: 40px;
              font-weight: 700;
              color: #fff;
              line-height: 1;
              text-shadow: 0px 3px 25px rgba(0, 0, 0, 0.1);">
              ISO 9001:2015

            </h1>
            
          </div>



        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->

  
      
  @include('layouts.public-partials.others.bar-blue2')