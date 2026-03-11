 <style type="text/css">
    /**/
    .instagram_gallery,
    .widget-item.null-instagram-feed {
      display: none !important;
    }






    .sh-side-options {
      position: fixed;
      top: 170px;
      bottom: 0;
      right: 0;
      z-index: 12345678902;
      transition: 0.3s all ease;
      transition: 0.2s all;
      padding: 0 0;
      width: 420px;
      transform: translateX(420px);
    }

    .sh-side-options.open {
      transform: translateX(0px);
      box-shadow: 0 0px 39px 10px rgba(0, 0, 0, 0.2);
    }

    .sh-side-options-container {
      position: absolute;
      top: 216px;
      left: -75px;
      width: 60px;
      background-color: rgba(255, 255, 2555, 1);
      border-radius: 5px;
      margin-right: 15px;
      box-shadow: -10px 0px 20px 2px rgba(0, 0, 0, .06);

    }


    .sh-side-options.sh-side-options-pages .sh-side-options-container {
      top: 150px;
    }



    .sh-side-options-item {
      display: block;
      text-align: center;
      margin: 0px;
      transition: 0.3s all ease-in-out;
      position: relative;
      padding: 7px;
      cursor: pointer;
    }

    .sh-side-options-item:not(:last-child) {
      border-bottom: 1px solid #f1f3fc;
    }

    .sh-side-options-item-container {
      border-radius: 4px;
      padding: 8px 0;
    }

    .sh-side-options-item:hover .sh-side-options-item-container,
    .sh-side-options-item:focus .sh-side-options-item-container,
    .sh-side-options.open .sh-side-options-item-trigger-demos .sh-side-options-item-container {
      background-color: #f3f5fd;
    }




    .sh-side-options-item i {
      font-size: 22px;
    }

    .sh-side-options-item:not(:hover):not(:focus) {
      color: #9396a5 !important;
    }

    .sh-side-options-item:hover .sh-side-options-hover {
      opacity: 1;
      transform: translateX(-97%);
      visibility: visible;
    }

    .sh-side-options-hover {
      position: absolute;
      background-color: #ffffff;
      color: #32343d;
      padding: 20px 26px;
      transform: translateX(-70%);
      left: 0px;
      top: 0;
      bottom: 0;
      opacity: 0;
      transition: 0.2s all ease-in-out;
      z-index: -100;
      border-top-left-radius: 5px;
      border-bottom-left-radius: 5px;
      font-size: 13px;
      box-shadow: 0px 0px 20px 2px rgba(0, 0, 0, 0.08);
      visibility: hidden;
    }

    .sh-side-options-hover span {
      padding: 0px 3px;
    }

    <blade media|%20(max-width%3A%20700px)%20%7B>.sh-side-options {
      width: 52px;
    }

    .sh-side-options-item {
      padding: 10px 0;
    }

    .sh-side-options-item i {
      font-size: 16px;
    }

    }

    <blade media|%20(max-width%3A%20600px)%20%7B>.sh-side-options {
      display: none;
    }

    }

    <blade media|%20(max-height%3A%20500px)%20%7B>.sh-side-options {
      top: 120px !important;
    }
    }


    .sh-side-options-item i {
      color: #9396a5 !important;
    }

    .sh-side-options.open .sh-side-options-item-trigger-demos i,
    .sh-side-options-item:hover i,
    .sh-side-options-item:focus i {
      color: #294cff !important;
    }



    /*
** Side Demos
*/
    .sh-side-demos-container {
      top: 0;
      left: 0;
      right: -17px;
      bottom: 0;
      position: absolute;
      overflow-y: scroll;
      background-color: #fff;
      background-repeat: no-repeat;
      background-position: right top;
      padding: 22px;
    }

    body.admin-bar .sh-side-demos-container {
      top: 32px;
    }


    /* Demos Text */
    .sh-side-demos-intro {
      text-align: center;
    }

    .sh-side-demos-intro-title {
      font-size: 24px;
      font-weight: 300;
      margin-top: 25px;
      margin-bottom: 15px;
    }

    .sh-side-demos-intro-title img {
      height: 24px;
      top: -6px;
      position: relative;
    }

    .sh-side-demos-intro-descr {
      max-width: 250px;
      margin: 0 auto;
      display: table;
      color: #838794;
    }



    /* Demos Close Button */
    .sh-side-demos-container-close {
      position: absolute;
      top: 22px;
      right: 22px;
      cursor: pointer;
    }

    .sh-side-demos-container-close i {
      color: #c5c5c5;
      font-size: 18px;
      transition: 0.3s all ease;
    }

    .sh-side-demos-container-close:hover i,
    .sh-side-demos-container-close:focus i {
      color: #7f7f7f;
    }


    /* Demo Items */
    .sh-side-demos-loop-container {
      position: relative;
      margin: 0 -10px;
      margin-top: 28px;
    }

    .sh-side-demos-item {
      display: inline-block;
      position: relative;
      margin-right: -4px;
      margin-bottom: 25px;
      width: 50%;
      padding: 0 10px;
      text-align: center;
      transition: .3s all ease;
      top: 0;
    }

    .sh-side-demos-item:hover {
      top: -4px;
    }

    .sh-side-demos-item .sh-image-lazy-loading {
      border-radius: 3px;
      box-shadow: 0 2px 20px 1px rgba(0, 0, 0, .1);
    }

    .sh-side-demos-item img {
      border-radius: 3px;
    }

    .sh-side-demos-item-name {
      font-size: 12px;
      color: #32343d;
      font-weight: 600;
      padding-top: 10px;
    }

    .sh-side-demos-item-tag {
      position: absolute !important;
      width: auto !important;
      height: auto !important;
      top: 4px;
      left: 6px;
      background-color: #ff5944;
      color: #fff;
      font-size: 9px;
      font-weight: 600;
      display: block;
      padding: 1px 9px;
      text-transform: capitalize;
      border-radius: 100px;
    }

    /* Evitar cambio de color en hover */
    .sh-side-options-item,
    .sh-side-options-item:hover,
    .sh-side-options-item:focus {
      color: inherit !important;
    }

    /* Evitar cambio de color del ícono */
    .sh-side-options-item i,
    .sh-side-options-item:hover i {
      color: inherit !important;
    }
  </style>

  <div class="sh-side-options sh-side-options-pages">
    <div class="sh-side-options-container" data-url="https://jevelin.shufflehound.com/autospot/">


      <a href="https://api.whatsapp.com/send?phone=573103366204" target="_blank" class="sh-side-options-item sh-accent-color">
        <div class="sh-side-options-item-container">
          <i class="fa fa-user"></i>
        </div>
        <div class="sh-side-options-hover">
          Contáctanos
        </div>
      </a>


      <a class="sh-side-options-item sh-side-options-item-trigger-demos sh-accent-color" onclick="openQR(event)">
        <div class="sh-side-options-item-container">
          <i class="fa fa-qrcode"></i>
        </div>
        <div class="sh-side-options-hover" style="white-space: nowrap;">
          Scanea código<span></span>QR 
        </div>
      </a>

       <a href="{{route('questions')}}" class="sh-side-options-item sh-accent-color">
        <div class="sh-side-options-item-container">
          <i class="fa fa-question"></i>
        </div>
        <div class="sh-side-options-hover">
          Preguntas<span></span>/<span></span>Respuestas
        </div>
      </a>

<!-- 
      <a target="blank" href="#" class="sh-side-options-item sh-accent-color">
        <div class="sh-side-options-item-container">
          <i class="fa fa-facebook"></i>
        </div>
        <div class="sh-side-options-hover">
          Facebook
        </div>
      </a>

     

      <a target="blank" href="#" class="sh-side-options-item sh-accent-color">
        <div class="sh-side-options-item-container">
          <i class="fa fa-instagram"></i>
        </div>
        <div class="sh-side-options-hover">
          Instagram
        </div>
      </a>

      <a target="blank" href="#" class="sh-side-options-item sh-accent-color">
        <div class="sh-side-options-item-container">
          <i class="fa fa-linkedin"></i>
        </div>
        <div class="sh-side-options-hover" style="white-space: nowrap;">
          Linkedin
        </div>
      </a> -->
    </div>


    <div class="sh-side-demos-container">
      <div class="sh-side-demos-container-close">
        <i class="ti-close"></i>
      </div>

      <div class="sh-side-demos-intro">
        <h3 class="sh-side-demos-intro-title sh-heading-font">
          <img src="../../cdn.jevelin.shufflehound.com/wp-content/uploads/2016/05/Je_Logo_black_big.png" alt="">
          Demos
        </h3>
        <p class="sh-side-demos-intro-descr sh-heading-font">
          Choose one of our premium made
          demos and make it your own!
        </p>
      </div>
      <div class="sh-side-demos-loop">
        <div class="sh-side-demos-loop-container">

          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/burger-shop/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2020/11/burder-shop-preview.jpg"
                        alt="digitalt-jevelin" />

                      <div class="sh-side-demos-item-tag">
                        new </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Burger Shop </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/business/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2019/12/screenshot-jevelin-business2.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Business </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/startup-clean">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2019/11/screenshot-jevelin-startup-clean.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Startup Clean </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/startup-creative/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2019/11/creative-startup.jpg"
                        alt="digitalt-jevelin" />

                      <div class="sh-side-demos-item-tag">
                        new </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Startup Creative </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/creative-agency/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2019/03/jevelin-agency.png"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Creative Agency </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/minimal-furniture-shop/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2020/09/minimal-furniture-demo-preview.png"
                        alt="digitalt-jevelin" />

                      <div class="sh-side-demos-item-tag">
                        new </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Minimal Furniture Shop </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/medical/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2019/02/screenshot-jevelin-medical.png"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Medical </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/mobile-app-2/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2020/07/screenshot-jevelin-app2.jpg"
                        alt="digitalt-jevelin" />

                      <div class="sh-side-demos-item-tag">
                        new </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Mobile App 2 </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/education/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin-education.png"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Education </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/single-product/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2019/09/single-product.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Single Product </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/portfolio-freelance/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2019/11/portfolio-freelance.jpg"
                        alt="digitalt-jevelin" />

                      <div class="sh-side-demos-item-tag">
                        new </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Portfolio Freelance </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/corporate-accounting/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2019/10/Demo-preview-frame.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Corporate Accounting </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/mobile-app/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2019/12/screenshot-jevelin-app.jpg"
                        alt="digitalt-jevelin" />

                      <div class="sh-side-demos-item-tag">
                        new </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Mobile App </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/portfolio-minimalistic/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2019/11/minimal-portfolio.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Portfolio Minimalistic </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/architect/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2019/10/screenshot-jevelin-architect.jpg"
                        alt="digitalt-jevelin" />

                      <div class="sh-side-demos-item-tag">
                        new </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Architect </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/portfolio-full-width/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2019/10/screenshot-jevelin-portfolio-full-width.jpg"
                        alt="digitalt-jevelin" />

                      <div class="sh-side-demos-item-tag">
                        new </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Portfolio Full-Width </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/personal-blog/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2019/09/screenshot-jevelin-peronal-blog.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Personal Blog </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/fashion-shop/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin-ecommerce.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Fashion eCommerce </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/finances/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Finance </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/digital-media-agency/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/digitalt-jevelin.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Digital Media Agency </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/startup/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin18.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Startup </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/corporate/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin11.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Corporate </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/portfolio1/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin17.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Portfolio </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/blog1/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin16.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Blog + Sidebar </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/blog1/from-side-to-side/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin1-1.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Blog - Side to Side </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/construction/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin23.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Construction </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/blog1/masonry_sidebar/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin2-1.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Blog - Full </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/home/home-creative/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin5.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Creative </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/shop1/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin14.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Shop </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="index.html">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin1.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Autospot </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/portfolio1/masonry-side-header/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin10.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Portfolio + Side Header </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/landing/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin13.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Landing </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/landing2/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin-LANDING2.png"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Landing 2 </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/home/home-fitness/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin9.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Fitness </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/coming-soon/side-by-side/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin22.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Coming Soon - Side by Side </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/coming-soon/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin21.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Coming Soon </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/home/home-photography/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin4.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Photography </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/home/home-nature/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin3-1.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Nature </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/wedding/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin8.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Wedding </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin7.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Basic/Classic </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/boxed/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin12.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Boxed </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/home/home-event/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin6.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Event </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/foodie/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin20.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Foodie </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/beauty/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin19.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Beauty </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="https://jevelin.shufflehound.com/crypto/">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin-crypto.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Crypto </div>
            </a>
          </div>


          <div class="sh-side-demos-item">
            <a href="#">

              <div class="sh-image-lazy-loading">
                <div class="sh-single-image-container sh-single-image-container-lazy">
                  <div class="ratio-container" style="padding-top: 62.692307692308%;">
                    <div class="ratio-content">
                      <img class="sh-image-url sh-side-demos-image"
                        data-src="https://jevelin.shufflehound.com/autospot/wp-content/uploads/sites/22/2016/05/screenshot-jevelin-coming-soon.jpg"
                        alt="digitalt-jevelin" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="sh-side-demos-item-name">
                Coming Soon </div>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>