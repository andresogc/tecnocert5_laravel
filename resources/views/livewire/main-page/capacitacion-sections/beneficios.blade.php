 <!-- inicio slider -->
     <style>
         .icon-auditoria {
          width: 65px;
          height: 65px;
          background: #1055A7 !important;
          color: white;
          border-radius: 50%; /* círculo */
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 1.3rem;
          flex-shrink: 0;
        } 
        .flip-card-front{
          box-shadow: none;
        }

    .flip-card-back {
        background: linear-gradient(120deg, #0e4e96, #1ce4de, #1056a8);
        background-size: 300% 300%;
        animation: gradientMove 5s ease infinite;
      }

      @keyframes gradientMove {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
      }
      .flip-card:hover .icon-auditoria {
        transform: rotate(360deg);
        transition: .6s;
      }

      .owl-dots{
        margin-top:50px;
      }

    </style>
      <section class="ftco-section bg-light"  style="padding-top: 50px;" >
        <div class="container">

        <!-- TITULO -->
        
         <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <!-- <h2>Preguntas más frecuentes</h2> -->
            <h1 class="title-diagram" style="line-height: 1.5;
            color: rgba(0, 0, 0, 0.8);
            font-weight: 400;font-size: 24px; text-align: center; text-transform:uppercase;"><strong> Beneficios de nuestros programas  </strong>de capacitación</h1>
            <span class="subheading">Tecnocert</span>
          </div>
        </div>

        <!-- TARJETAS -->
        
        <!-- SLIDER -->
        <div class="cards-auditoria-slider owl-carousel">
          <!-- 1 -->
           
               <div class="item">
                <div class="flip-card">
                  <div class="flip-card-inner">

                    <div class="flip-card-front text-center">
                      <!-- <img src="images/ENFOQUE AL CLIENTE.webp" class="img-fluid my-3" style="max-width:80px;"> -->
                       <span class="fa fa-cogs icon-auditoria" ></span>
                      <span class="excerpt d-block"><br>Enfoque Práctico</span>
                    </div>

                    <div class="flip-card-back">
                      <h5>Enfoque Práctico</h5>
                      <p> No leemos la norma; enseñamos cómo aplicarla a la realidad operativa de tu negocio.</p>
                    </div>

                  </div>
                </div>
              </div>
          

          <!-- 2 -->
           
           <div class="item">
            <div class="flip-card">
              <div class="flip-card-inner">

                <div class="flip-card-front text-center">
                  <!-- <img src="images/LIDERAZGO.webp" class="img-fluid my-3" style="max-width:80px;"> -->
                   <span class="fa fa-bolt icon-auditoria" ></span>
                  <span class="excerpt d-block"><br>Optimización del Tiempo</span>
                </div>

                <div class="flip-card-back">
                  <h5>Optimización del Tiempo</h5>
                  <p>Procesos claros y más ejecución efectiva.</p>
                </div>

              </div>
            </div>
          </div>
          

          <!-- 3 -->
          
          <div class="item">
            <div class="flip-card">
              <div class="flip-card-inner">

                <div class="flip-card-front text-center">
                  <!-- <img src="images/COMPROMISO.webp" class="img-fluid my-3" style="max-width:80px;"> -->
                   <span class="fa fa-certificate icon-auditoria"  style="margin-top: 24px;"></span>
                  <span class="excerpt d-block"><br>Preparación para la Certificación</span>
                </div>

                <div class="flip-card-back">
                  <h5>Preparación para la Certificación</h5>
                  <p>Facilitamos el camino hacia auditorías exitosas con personal seguro y preparado.</p>
                </div>

              </div>
            </div>
          </div>

           <!-- 4 -->
          
          <div class="item">
            <div class="flip-card">
              <div class="flip-card-inner">

                <div class="flip-card-front text-center">
                  <!-- <img src="images/COMPROMISO.webp" class="img-fluid my-3" style="max-width:80px;"> -->
                   <span class="fa fa-users icon-auditoria" ></span>
                  <span class="excerpt d-block"><br>Fidelización del Cliente</span>
                </div>

                <div class="flip-card-back">
                  <h5>Fidelización del Cliente</h5>
                  <p>La calidad constante es la mejor carta de presentación para tus partes interesadas.</p>
                </div>

              </div>
            </div>
          </div>
        </div>
        

      </div>
    </section>
     <!-- fin slider -->