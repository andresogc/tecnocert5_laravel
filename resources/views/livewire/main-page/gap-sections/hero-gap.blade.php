
<div>
<style>
  /* ================= HERO BASE ================= */
.hero-wrap-2 {
  position: relative;
  min-height: 40vh;
  overflow: hidden;
  display: flex;
  align-items: center;
}

/* ================= IMAGEN FONDO ================= */
.hero-gap-bg {
  background-image: url('{{ asset("main-page/images/banner_gap_analisis.webp") }}');
}

@media (max-width: 767.98px) {
  .hero-gap-bg {
    background-image: url('{{ asset("main-page/images/mobile/banner_gap_analisis_mobile2.webp") }}') !important;
  }
}

/* ================= PARTICLES ================= */
#particles-js {
  position: absolute;
  inset: 0;
  z-index: 999;
}

/* ================= TEXTO ================= */
.hero-wrap-2 .container,
.hero-wrap-2 .slider-text {
  position: relative;
  z-index: 3;
}

/* ================= DESKTOP TEXTO ================= */
.hero-wrap-2 .col-md-9 {
  display: flex;
  justify-content: end;
}

/* ================= MOBILE ================= */
@media (max-width: 767.98px) {

  /* Banner no gigante */
  .hero-wrap,
  .hero-wrap-2 {
    height: 400px !important; /* Restauramos la altura para permitir espacio de centrado */
    padding: 0 !important;
  }

  .hero-wrap-2 .slider-text {
    align-items: center !important; /* Centrado vertical real */
    height: 400px !important;
  }

  .hero-wrap-2 .row {
    width: 100%;
    justify-content: center !important;
  }

  .hero-wrap-2 .col-md-9 {
    display: flex !important;
    justify-content: center !important;
    margin-top: 0 !important;
    padding-bottom: 0 !important;
  }

  .hero-wrap-2 .text {
    width: 100% !important;
    padding-bottom: 0 !important;
    margin: 0 auto;
  }

  /* Tamaños de texto */
  .hero-wrap h1 {
    font-size: 28px !important;
    line-height: 1.2;
  }

  .hero-wrap h2 {
    font-size: 14px !important;
  }
}

</style>
  <!-- Hero Section Start -->
  <section class="hero-wrap hero-wrap-2 hero-gap-bg">
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


          <div class="text w-100 text-center" style="padding-bottom: 40px;width: 60% !important;z-index: 10;">
            <h2 style="font-size: 16px;
              text-transform: uppercase;
              letter-spacing: 2px;
              font-family: 'Poppins', Arial, sans-serif;
              font-weight: 600;
              color: #1ce4de;
              display: inline-block;
              position: relative;
              letter-spacing: 4px;">SERVICIO</h2>
            <h1 class="mb-4" style="font-size: 40px;
              font-weight: 700;
              color: #fff;
              line-height: 1;
              text-shadow: 0px 3px 25px rgba(0, 0, 0, 0.1);">
              GAP Análisis

            </h1>
            
          </div>



        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->

  
      
  @include('layouts.public-partials.others.bar-blue2')
  </div>