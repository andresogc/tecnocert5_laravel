 <style>
      .icons-card .card {
        background: #ffffff;
        border-radius: 18px;
        padding: 25px 20px;
        border: none;
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
        transition: all 0.35s ease;
        text-align: center;
        height: 100%;
      }

      /* Hover premium */
      .icons-card .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.12);
      }

      /* Icon container */
      .icons-card .card .icon {
        background: linear-gradient(135deg, #f8f9fa, #ffffff);
        width: 90px;
        height: 90px;
        border-radius: 50%;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        margin: 0 auto;
        transition: 0.3s ease;
      }

      /* Icon hover */
      .icons-card .card:hover .icon {
        transform: scale(1.08);
      }

      /* Title */
      .icons-card .card h3 {
        font-weight: 700;
        font-size: 20px;
        margin-top: 15px;
        color: #1f2937;
      }

      /* Text */
      .icons-card.card p {
        color: #6b7280;
        font-size: 14px;
        margin-bottom: 10px;
      }

      /* Link */
      .icons-card.card a {
        color: #2563eb;
        font-weight: 600;
        text-decoration: none;
        transition: 0.3s;
      }

      .icons-card .card a:hover {
        color: #1e40af;
        text-decoration: underline;
      }

      .icons-card .card .media-body {
        flex-grow: 1 !important;
        display: flex;
        flex-direction: column;
      }

      .icons-card .card .media-body p:last-child {
        margin-top: auto;
      }
    </style>

    <section class="ftco-section" style="padding-bottom:30px !important">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <!-- <h2>Conoce más acerca de nuestros servicios</h2> -->
            <h1 style="line-height: 1.5;
          color: rgba(0, 0, 0, 0.8);
          font-weight: 400;font-size: 24px; text-align: center;text-transform:uppercase;"><strong> Conoce más acerca de  </strong>nuestros servicios</h1>

            <span class="subheading">Conoce más</span>
          </div>
        </div>
        <div class="row icons-card">
          <div class="col-md-3 services align-self-stretch px-4 ftco-animate">
            <div class="card">
              <div class="d-block text-center">
                <div class="icon d-flex justify-content-center align-items-center"
                  style="background-color: #fefefe; width:90px !important;height:90px !important">
                  <!-- <span class="flaticon-goal"></span> -->
                  <img src="{{asset('main-page/images/icono1.png')}}" alt="" width="88px">
                </div>
                <div class="media-body p-2 mt-3">
                  <h3 class="heading">ISO 9001:2015</h3>
                  <p>Nuestros Servicios</p>
                  <p>
                    <a href="{{route('iso9001')}}" target="_blank">
                      Más información aquí
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-9 card">
            <div class="row">
              <div class="col-md-6 services align-self-stretch px-6 ftco-animate">
                <div class="d-block text-center">
                  <div class="icon d-flex justify-content-center align-items-center"
                    style="background-color: #fefefe; width:90px !important;height:90px !important">
                    <!-- <span class="flaticon-account" style="font-size: 60px;"></span> -->
                    <img src="{{asset('main-page/images/icono2.png')}}" alt="" width="88px">
                  </div>
                  <div class="media-body p-2 mt-3">
                    <h3 class="heading">GAP Análisis</h3>
                    <p>Nuestros Servicios</p>

                    <p>
                      <a href="{{route('gap_analisis')}}" target="_blank">
                        Más información aquí
                      </a>
                    </p>
                    <p>&nbsp;</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 services align-self-stretch px-6 ftco-animate">
                <div class="d-block text-center">
                  <div class="icon d-flex justify-content-center align-items-center"
                    style="background-color: #fefefe; width:90px !important;height:90px !important">
                    <!-- <span class="flaticon-skills" style="font-size: 60px;"></span> -->
                    <img src="{{asset('main-page/images/icono3.png')}}" alt="" width="88px">
                  </div>
                  <div class="media-body p-2 mt-3">
                    <h3 class="heading">Auditoría Interna</h3>
                    <p>Nuestros Servicios</p>

                    <p>
                      <a href="{{route('auditoria_interna')}}" target="_blank">
                        Más información aquí
                      </a>
                    </p>
                    <p>&nbsp;</p>
                  </div>
                </div>
              </div>
              {{-- <div class="col-md-4 services align-self-stretch px-4 ftco-animate">
                <div class="d-block text-center">
                  <div class="icon d-flex justify-content-center align-items-center"
                    style="background-color: #fefefe; width:90px !important;height:90px !important">
                    <!-- <span class="flaticon-skills" style="font-size: 60px;"></span> -->
                     <img src="{{asset('main-page/images/icono4.png')}}" alt="" width="88px">
                  </div>
                  <div class="media-body p-2 mt-3">
                    <h3 class="heading">Capacitación</h3>
                    <p>Nuestros Servicios</p>

                    <p>
                      <a href="{{route('capacitacion')}}" target="_blank">
                        Más información aquí
                      </a>
                    </p>
                    <p>&nbsp;</p>
                  </div>
                </div>
              </div> --}}
            </div>
          </div>

        </div>
      </div>
    </section>