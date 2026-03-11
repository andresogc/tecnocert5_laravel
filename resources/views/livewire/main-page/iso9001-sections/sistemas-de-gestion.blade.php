  <style>
    /* Elimina o comenta estos estilos anteriores */
    /*
  .story-wrap-centered {
    margin-left: auto;
    margin-right: auto;
    max-width: 900px;
  }
  
  .story-wrap .img {
    margin-left: 20px;
  }
  */

    /* Nuevos estilos para expandir el ancho */
    .expanded-content {
      width: 100%;
      max-width: 1200px;
      /* Aumenté de 900px a 1200px */
      margin: 0 auto;
    }

    .expanded-content .story-wrap {
      width: 100%;
    }

    /* Ajusta la proporción entre imagen y texto */
    .expanded-content .img {
      flex: 0 0 45%;
      /* La imagen ocupa el 45% */
      min-height: 350px;
      /* Altura mínima para la imagen */
    }

    .expanded-content .text {
      flex: 0 0 55%;
      /* El texto ocupa el 55% */
      padding-left: 40px !important;
      /* Más espacio entre imagen y texto */
    }

    /* Para pantallas más pequeñas */


    .expanded-content .text {
      flex: 0 0 100%;
      padding-left: 0 !important;
    }


    /* Contenedor principal */
    .flip-card {
      background: transparent;
      width: 100%;
      height: 220px;
      perspective: 1000px;
    }

    /* Parte interna que gira */
    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      transition: transform 0.8s ease;
      transform-style: preserve-3d;
    }

    /* Giro al pasar mouse */
    .flip-card:hover .flip-card-inner {
      transform: rotateY(180deg);
    }

    /* Caras */
    .flip-card-front,
    .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      border-radius: 12px;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    /* Front */
    .flip-card-front {
      background: white;
    }

    /* Back */
    .flip-card-back {
      background: #0d6efd;
      color: white;
      transform: rotateY(180deg);
      text-align: center;
    }

    .excerpt {
      text-transform: uppercase;
      font-size: 14px;
      letter-spacing: 2px;
      font-weight: 600;
      color: black;
    }
  </style>
  <section class="ftco-section" style=" padding-top:4em !important;padding-bottom: 0px !important;">

    <!-- BLOQUE INTRO ISO -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 ftco-animate">

          <div class="expanded-content">
            <div class="story-wrap d-md-flex align-items-center mr-4">
              <div class="img" style="background-image: url({{asset('main-page/images/image_1.jpg')}})"></div>

              <div class="text " style="margin-left:30px;flex: 0 0 50%;text-align:justify" >
                <h4>
                  <span>ISO 9001:2015 – Sistemas de Gestión de la Calidad</span>
                </h4>

                <p>
                  La norma ISO 9001 especifica los requisitos para establecer
                  un sistema de gestión de la calidad (SGC). Aporta al compromiso
                  con la satisfacción de las partes interesadas. La norma
                  internacional es aplicable a cualquier tipo de organización
                  de cualquier sector o actividad. Está basada en los siete
                  principios de gestión de calidad.
                </p>

                <p>
                  SGC aporta a una imagen y reputación de buenos productos y
                  servicios ante sus clientes y el mercado, además de la
                  eficacia y eficiencia de los procesos de la organización.
                </p>

                <p>
                  <a href="https://wa.me/573103366204" target="_blank" class="btn btn-primary">Más información</a>
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>