
    <style>
      .faqs-slider .owl-stage {
        display: flex;
      }

      .faqs-slider .owl-item {
        display: flex;
        justify-content: center;
      }
      /* .faqs-slider .owl-item > div {
        width: 100%;
      } */

      .testimony-wrap {
        width: 100%;
        max-width: 400px;
        
      }

      /*con esto las centramos y limitamos el ancho del slider, puedes ajustar el max-width según tus necesidades*/
      .faqs-slider {
        max-width: 900px;   /* prueba 800, 900, 1000 */
        margin: auto;
      }


        
     

        .slider-item{
         overflow: visible !important;
        }

        .testimony-wrap {
        position: relative;
        overflow: visible !important;
        z-index: 5;
      }

      .testimony-wrap .icon {
        position: absolute;
        top: -25px;
        left: 20px;
        z-index: 999;
      }



  
    </style>
    <!-- inicio section sliders -->
    <div class="hero-wrap" style="background-color: #1056a8  !important;">
      <!-- TÍTULO Y SUBTÍTULO -->
      <div class="container">
        <div class="row justify-content-center text-center " style="margin-top: 60px;">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
           <!--  <h2 style="color: white;">Formatos y solicitudes Tecnocert</h2> -->
            <h1 style="line-height: 1.5;
          color: #fff;
          font-weight: 400;font-size: 24px; text-align: center; text-transform:uppercase"><strong> Formatos y solicitudes </strong>Tecnocert</h1>
            <span class="subheading" style="color: white;">Tu tranquilidad comienza con información clara</span>
          </div>
        </div>
      </div>
      <div class="faqs-slider owl-carousel" style="margin-top: 50px !important;height: 400px; margin-bottom: 0px;" >
        <?php foreach($data['faqsSlider'] as $faq): ?>
        <div class="slider-item " style="padding:45px ;">
            <!-- incio Tarjeta  -->
            <div class="testimony-wrap " >
              
              <div class="icon d-flex  z-index-10">
                <span class="fa fa-quote-left"></span>
              </div>
              
              
                <p class="mb-0" style="font-family: 'Poppins', Arial, sans-serif;
                  background: #fff;
                  font-size: 14px;
                  line-height: 1.4;
                  font-weight: 400;
                  color: #333;
                  text-align:justify;
                  ">
                  <span style="font-size:1.7rem;"> <strong><?= htmlspecialchars($faq['title']) ?></strong></span><br />
                
                  <br><br>
                  
                </p>
                <div class="d-flex align-items-center">
                
                  <div class="pl-3 mr-4">
                    <p class="name"><?= htmlspecialchars($faq['footerTitle']) ?></p>
                    <span class="position">
                      <a href="<?= htmlspecialchars($faq['download_path']) ?>">
                        Descargar Documento
                        
                        </a>
                    </span>
                  </div>
                    <div class="avatar-container">
                    
                      <!-- <img src="images/logo.svg" alt="TECNOCERT Logo" class="avatar-img" /> -->
                      <a href="<?= htmlspecialchars($faq['download_path']) ?>">
                    <i class="fa fa-download" style="color:#1056A8; font-size:32px"></i>
                    </a>

                  </div>
                </div>
              
            </div>
            
        </div>
        <?php endforeach; ?>


      </div>
    </div>