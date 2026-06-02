
    <style>
        .services-glass {
            padding: 100px 0;
            background: linear-gradient(135deg, #f7f9fc, #eef2f7);
          }

          /* TITULO */
          .glass-title {
            font-weight: 800;
            font-size: 2.3rem;
            color: #0e4e96;
          }

          .glass-subtitle {
            color: #6b7280;
            font-size: 15px;
          }

          /* GLASS CARD */
          .glass-card {
            backdrop-filter: blur(12px);
            background: rgba(255, 255, 255, 0.75);
            border-radius: 20px;
            padding: 30px 22px;
            border: 1px solid rgba(255,255,255,0.4);
            box-shadow: 0 10px 40px rgba(0,0,0,.08);
            transition: .35s;
            text-align: center;
            height: 100%;
            position: relative;
          }

          /* Hover premium */
          .glass-card:hover {
            transform: translateY(-12px);
              box-shadow:
              0 25px 60px rgba(14, 78, 150, 0.25),
              0 0 0 1px rgba(28, 228, 222, 0.15),
              0 0 25px rgba(28, 228, 222, 0.15);
            border-color: rgba(14,78,150,.25);
          }

          /* ICON */
          .glass-icon {
            width: 70px;
            margin-bottom: 18px;
            transition: .3s;
          }

          .glass-card:hover .glass-icon {
            transform: scale(1.15) rotate(-3deg);
          }

          /* TITULO */
          .glass-card h4 {
            font-weight: 700;
            color: #1f2937;
          }

          /* TEXTO */
          .glass-card p {
            font-size: 14px;
            color: #6b7280;
          }

          /* LINK */
          .glass-card a {
            font-weight: 600;
            color: #0e4e96;
            text-decoration: none;
          }

          .glass-card a:hover {
            text-decoration: underline;
          }

          /* ISO DESTACADO */
          .iso-highlight {
            background: rgba(14, 78, 150, 0.85);
            color: white;
          }

          .iso-highlight h4,
          .iso-highlight p,
          .iso-highlight a {
            color: white;
          }

          .iso-highlight a:hover {
            color: #1ce4de;
          }

          /* Badge ISO */
          .badge-iso {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255,255,255,.2);
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
          }
        .services-glass{
          padding-top:0;
        }
    </style>
    <section class="services-glass" >
      <div class="container">

          <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
              <!-- <h2>Conoce más acerca de nuestros servicios</h2> -->
              <h1 style="line-height: 1.5;
            color: rgba(0, 0, 0, 0.8);
            font-weight: 400;font-size: 24px; text-align: center;text-transform:uppercase;padding-top: 20px;"><strong> Conoce más acerca de  </strong>nuestros servicios</h1>

              <span class="subheading">Conoce más</span>
            </div>
          </div>

        <div class="row g-4">

          <!-- ISO CARD DESTACADA -->
          <div class="col-md-4">
            <div class="glass-card iso-highlight">
             <!--  <span class="badge-iso">Servicio Principal</span> -->
              <img src="{{asset('main-page/images/icono1.png')}}" class="glass-icon">
              <h4>ISO 9001:2015</h4>
              <p>Nuestros Servicios</p>
              <a href="{{route('iso9001')}}" target="_blank">Más información →</a>
            </div>
          </div>

          <!-- GAP -->
          <div class="col-md-4">
            <div class="glass-card">
              <img src="{{asset('main-page/images/icono2.png')}}" class="glass-icon">
              <h4>GAP Análisis</h4>
              <p>Nuestros Servicios</p>
              <a href="{{route('gap_analisis')}}" target="_blank">Más información →</a>
            </div>
          </div>

          <!-- AUDITORIA -->
          <div class="col-md-4">
            <div class="glass-card">
              <img src="{{asset('main-page/images/icono3.png')}}" class="glass-icon">
              <h4>Auditoría Interna</h4>
              <p>Nuestros Servicios</p>
              <a href="{{route('auditoria_interna')}}" target="_blank">Más información →</a>
            </div>
          </div>

          <!-- CAPACITACION -->
          {{-- <div class="col-md-3">
            <div class="glass-card">
              <img src="{{asset('main-page/images/icono4.png')}}" class="glass-icon">
              <h4>Capacitación</h4>
              <p>Nuestros Servicios</p>
              <a href="{{route('capacitacion')}}" target="_blank">Más información →</a>
            </div>
          </div> --}}

        </div>

      </div>
    </section>
