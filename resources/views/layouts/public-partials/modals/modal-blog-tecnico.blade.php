<div class="modal-blog-tecnico " id="modalBlogTecnico">
  <div class="modal-blog-tecnico-content">
    <div class="modal-header">
      <div id="modalTitle" style="color: #0B1A42"><span><i class="fa fa-laptop"></i></span> </div>
      <button class="modal-close" onclick="closeBlogTecnicoModal()">
        &times;
      </button>
    </div>
    <div class="modal-header">
    <div class="modal-body">
        <!-- Aquí se cargará el contenido dinámico -->
         <img id="modalImage" src="" alt="" class="modal-img">
        <p id="modalText"></p>
    </div>
    </form>
  </div>
</div>
<style>
      /* MODAL DE VERIFICACIÓN - ESTILO COHERENTE */
      .modal-blog-tecnico {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        z-index: 99999;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        padding: 0;
        /* 👈 eliminar padding */
        padding: 20px;
        box-sizing: border-box;

      }

      .modal-blog-tecnico.active {
        display: flex;
        opacity: 1;
      }

      .modal-blog-tecnico-content {
        background: #d7e9ff; 
        width: 100%;
        max-width: 400px;
        width: 100%;
        border-radius: 8px;
        padding: 2rem;
        position: relative;
        animation: modalSlideIn 0.3s ease;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
        /* CORRECCIÓN: Eliminar scroll y ajustar altura */
        max-height: calc(100vh - 40px);
        /* Resta el padding del modal */
        overflow: visible;
        /* Elimina el scroll */
        display: flex;
        flex-direction: column;
      }

      /* Animación de entrada */


      to {
        transform: translateY(0);
        opacity: 1;
      }


      .modal-blog-tecnico .modal-header {
        margin-bottom: 1.5rem;
        color: white;
        position: relative;
        padding-bottom: 10px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        flex-shrink: 0;
        /* Evita que se reduzca */
      }

      .modal-blog-tecnico .modal-header h2 {
        font-size: 1.5rem;
        margin: 0;
        color: white;
        font-weight: 600;
        padding-right: 30px;
        /* Espacio para el botón de cerrar */
      }

      .modal-blog-tecnico .modal-close {
        position: absolute;
        top: -15px;
        right: -15px;
        background: #0B1A42;
        color: white;
        border: none;
        border-radius: 50%;
        width: 32px;
        height: 32px;
        font-size: 1.5rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.3s ease;
        z-index: 2;
      }

      .modal-blog-tecnico .modal-close:hover {
        background: #0e4e96;
      }

      /* Contenedor del formulario con scroll interno si es necesario */
      .form-blog-tecnico {
        flex: 1;
        /* Ocupa el espacio restante */
        overflow-y: auto;
        /* Scroll solo dentro del formulario */
        padding-right: 5px;
        /* Espacio para evitar que el scroll tape contenido */
        margin-right: -5px;
        /* Compensa el padding */
      }

      /* Estilos de la barra de scroll del formulario */
      .form-blog-tecnico::-webkit-scrollbar {
        width: 6px;
      }

      .form-blog-tecnico::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 3px;
      }

      .form-blog-tecnico::-webkit-scrollbar-thumb {
        background: #1056a8;
        border-radius: 3px;
      }

      .form-blog-tecnico::-webkit-scrollbar-thumb:hover {
        background: #0e4e96;
      }

      /* Estilos del formulario dentro del modal */
      .modal-blog-tecnico .form-blog-tecnico .form-group {
        margin-bottom: 1.2rem;
      }

      .modal-blog-tecnico .form-blog-tecnico label {
        display: block;
        color: white;
        margin-bottom: 0.5rem;
        font-size: 14px;
        font-weight: 500;
      }

      .modal-blog-tecnico .form-blog-tecnico .form-control {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #444;
        border-radius: 4px;
        background: #444;
        color: white;
        font-family: "Poppins", Arial, sans-serif;
        font-size: 14px;
        transition: border-color 0.3s ease;
        box-sizing: border-box;
      }

      .modal-blog-tecnico .form-blog-tecnico .form-control:focus {
        outline: none;
        border-color: #1056a8;
        box-shadow: 0 0 0 2px rgba(16, 86, 168, 0.2);
      }

      .modal-blog-tecnico .form-blog-tecnico .form-control::placeholder {
        color: #aaa;
      }

      .modal-blog-tecnico .form-blog-tecnico select.form-control {
        cursor: pointer;
      }

      .modal-blog-tecnico .form-blog-tecnico textarea.form-control {
        resize: vertical;
        min-height: 80px;
        max-height: 150px;
        /* Limitar altura máxima del textarea */
      }

      .modal-blog-tecnico .form-blog-tecnico .submit {
        background: #1056a8;
        color: white;
        border: none;
        border-radius: 4px;
        padding: 0.75rem;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s ease;
        margin-top: 1rem;
        width: 100%;
      }

      .modal-blog-tecnico .form-blog-tecnico .submit:hover {
        background: #0e4e96;
      }

      .modal-blog-tecnico .form-footer {
        margin-top: 1rem;
        text-align: center;
        flex-shrink: 0;
        /* Evita que se reduzca */
      }

      .modal-blog-tecnico .form-footer small {
        color: #aaa;
        font-size: 12px;
      }

      /* Media queries para ajustar en diferentes dispositivos */


      .modal-blog-tecnico .form-blog-tecnico .form-group {
        margin-bottom: 1rem;
      }

      .modal-blog-tecnico .form-blog-tecnico textarea.form-control {
        min-height: 60px;
        max-height: 100px;
      }


      .modal-blog-tecnico .modal-header h2 {
        font-size: 1.3rem;
      }

      .modal-blog-tecnico .form-blog-tecnico .form-group {
        margin-bottom: 0.8rem;
      }

      .modal-blog-tecnico .form-blog-tecnico .form-control {
        padding: 0.6rem;
      }




      .modal-blog-tecnico-content {
        padding: 1.5rem;
        max-width: 40%;
      }


      .modal-blog-tecnico .modal-header h2 {
        font-size: 1.2rem;
      }

      .modal-blog-tecnico .modal-close {
        top: -10px;
        right: -10px;
        width: 28px;
        height: 28px;
        font-size: 1.3rem;
      }

      
      .modal-blog-tecnico-content {
    /*  background: #fff; */
      width: 1000px;
      max-width: 95%;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 10px 40px rgba(0,0,0,.3);
    }

    .modal-body {
      max-height: 70vh;
      overflow-y: auto;
    }


    /*inicio SCROLL PREMIUM AZUL */
    .modal-body::-webkit-scrollbar {
      width: 6px; /* más delgado */
    }

    .modal-body::-webkit-scrollbar-track {
      background: rgba(255,255,255,0.05);
      border-radius: 10px;
    }

    .modal-body::-webkit-scrollbar-thumb {
      background: #0B1A42
      border-radius: 10px;
    /*  box-shadow: inset 0 0 3px rgba(0,0,0,.4); */
    }

    .modal-body::-webkit-scrollbar-thumb:hover {
      background: #0B1A42
    }
    /* fin SCROLL PREMIUM AZUL */

    .modal-img {
      width: 100%;
      border-radius: 8px;
      margin-bottom: 15px;
    }

    .modal-body p {
      font-size: 16px;
      line-height: 1.7;
      /* color: #333; */
      white-space: pre-line; /* para respetar saltos de línea */
    }
    .paragraph{
        text-align:justify;
        padding-right: 10px;
    }


    /* ===== IMAGEN FLOTANTE A LA IZQUIERDA (REVISTA / BLOG) ===== */
    .modal-img {
      width: 360px;              /* imagen pequeña */
      max-width: 50%;
      float: left;                /* CLAVE para que el texto fluya */
      margin: 0 20px 10px 0;      /* espacio derecha y abajo */
      border-radius: 8px;
    }

    /* Texto fluido y justificado */
    #modalText {
      font-family: "Poppins", Arial, sans-serif;
      text-align: justify;
      font-size: 14px;
      line-height: 1.2;
      white-space: pre-line;
      margin-top: -18px;
      padding-right:20px;
      color: #0B1A42
    }

    #modalText .paragraph{
      font-family: "Poppins", Arial, sans-serif;
      font-size: 14px;
      line-height: 1.8;
      font-weight: 400;
      padding-right:20px;
      color: #0B1A42;
      
    }
    /* Limpiar float después del texto para evitar bugs */
    .modal-body::after {
      content: "";
      display: block;
      clear: both;
    }
    #modalTitle h2{
    color: #0B1A42
    }
    /********************************************************* */
    .modal-icons-box{
      display: flex;
      justify-content: center;
      gap: 25px;
      margin-top: -30px;
      margin-bottom: -70px;
    }

    .modal-icon-circle{
      width: 70px;
      height: 70px;
      background: #1056a8; /* azul corporativo */
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 0 20px rgba(0,123,255,0.4);
      transition: 0.3s ease;
    }

    .modal-icon-circle i{
      font-size: 42px;
      color: #fff;
    }

    /* efecto premium hover */
    .modal-icon-circle:hover{
      transform: scale(1.1);
      box-shadow: 0 0 30px rgba(0,123,255,0.8);
    }
    .modal-icon-item{
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .modal-icon-label{
      margin-top: 10px;
      font-size: 14px;
      font-weight: 600;
      color: #333; /* o blanco si fondo oscuro */
      letter-spacing: 1px;
      font-family: "Poppins", Arial, sans-serif;
    }

</style>
<script>
    const modalData = {
  1: {
    title: "<h2> TECNOCERT llega al mercado de certificación de Sistemas de Gestión</h2>",
    image: "{{ asset('main-page/images/image_1.jpg') }}",
    text: `
    <p class="paragraph" style="margin-bottom:-10px !important;">
    El mercado de la certificación de sistemas de gestión evoluciona constantemente para responder a las nuevas exigencias de calidad, seguridad, sostenibilidad y cumplimiento normativo. En este contexto, <strong>TECNOCERT</strong> irrumpe como una nueva alternativa especializada, confiable y alineada con los estándares internacionales, con el propósito de fortalecer la competitividad de las organizaciones en Colombia y Latinoamérica.
    </p>
    <p class="paragraph" style="margin-bottom:-10px !important;">TECNOCERT nace con una visión clara: <strong>certificar con rigor técnico, transparencia y enfoque en la mejora continua,</strong> acompañando a las empresas en su camino hacia la excelencia operativa. Su propuesta se basa en procesos de auditoría objetivos, personal altamente calificado y un profundo conocimiento de los diferentes sectores productivos.</p>
    <p class="paragraph" style="margin-bottom:-10px !important;"><strong>Certificación con enfoque estratégico</strong> Más allá de cumplir un requisito normativo, la certificación de sistemas de gestión se convierte en una herramienta estratégica para las organizaciones. TECNOCERT entiende este enfoque y por ello ofrece servicios de certificación que aportan valor real al negocio, impulsando la eficiencia de los procesos, la gestión del riesgo y la confianza de clientes y partes interesadas.</p>
    <p class="paragraph" style="margin-bottom:-35px !important;">Entre los sistemas de gestión que certifica TECNOCERT se encuentra <strong>ISO 9001 – Gestión de la Calidad</strong><p>
    <p class="paragraph" style="margin-bottom:-10px !important;"><strong>Compromiso con la confianza y la mejora continua</strong>
    TECNOCERT se diferencia por su <strong>compromiso con la imparcialidad, la ética y la excelencia técnica,</strong> pilares fundamentales en la certificación de sistemas de gestión. Cada proceso es desarrollado bajo criterios claros, metodologías reconocidas y una comunicación cercana con las organizaciones certificadas.
    Con su llegada al mercado, TECNOCERT busca convertirse en un aliado estratégico para empresas que desean demostrar su cumplimiento, fortalecer su reputación y consolidar sistemas de gestión robustos y sostenibles.</p>
     <p class="paragraph" style="margin-bottom:-10px !important;"><strong>Un nuevo aliado para la competitividad empresarial</strong>
        La entrada de TECNOCERT al sector representa una oportunidad para las organizaciones que buscan una certificadora moderna, ágil y orientada a generar confianza. Su enfoque en la calidad del servicio y la mejora continua marca el inicio de una nueva etapa en la certificación de sistemas de gestión.</p>  
    <p class="paragraph" style="margin-bottom:-30px !important;"><strong>TECNOCERT: certificando con confianza, impulsando la excelencia.</strong></p>
`
  },

  2: {
    title: "<h2>¿SABÍAS QUÉ LA NORMA ISO 9001 ENTRARÁ EN ACTUALIZACIÓN?</h2> ",
    image: "{{ asset('main-page/images/image_2.jpg') }}",
    text: `
        <p class="paragraph"> La norma ISO 9001:2026 será la próxima revisión del estándar de Sistemas de Gestión de la Calidad (SGC), prevista para su publicación definitiva en 2026, sustituyendo a la versión 2015. Mantendrá la estructura de alto nivel (Anexo SL), incorporando enfoques modernos como digitalización, sostenibilidad, cultura de calidad, resiliencia organizacional y conducta ética, buscando adaptarse a los retos globales actuales. No obstante, nos encontramos a la confirmación y publicación final de los posibles cambios.</p>
        <br>
        <p class="paragraph" style="margin-bottom:-20px !important;" ><strong> Estado Actual y Transición;</strong></p>
          <ul style="margin-bottom:-30px !important;">
              <li><strong>Fases:</strong> Actualmente, se están revisando los borradores internos (DIS - Draft International Standard). Se espera que el borrador final (FDIS) se publique alrededor del tercer o cuarto trimestre de 2026. </li>
              <li ><strong>Transición:</strong> Las organizaciones certificadas deberán realizar la transición en un período previsto de 3 años (hasta finales de 2029). </li>
              <li><strong>Impacto:</strong> Se anticipan cambios moderados enfocados en mejorar la relevancia de la norma en un entorno empresarial cambiante. </li>
          </ul>
        
        <p class="paragraph" >Para las organizaciones, esta actualización representa una oportunidad para realinear sus sistemas de gestión con los objetivos estratégicos y asegurar la continuidad en el cumplimiento de los estándares de calidad modernos. </p>
            
    `
  },

  3: {
    title: `<h2> ¿SABÍAS QUÉ? 
             </h2>`,
                image: "{{ asset('main-page/images/image_3.jpg') }}",
    text: ` 
    <p class="paragraph">Sí certificas tu empresa en <strong>ISO 9001:2015,</strong> tu certificado de <strong> RETIE y RETILAP</strong> pueden llegar a tener una vigencia por 5 años.</p>
    <p class="paragraph">De acuerdo con la <strong> RESOLUCIÓN NÚMERO 40150 RETILAP y 40117 RETIE.</strong> Al contar con un sistema de gestión de calidad ISO 9001:2015 certificado, tú certificado de <strong>RETIE</strong> y <strong>RETILAP</strong> pasa a esquema 5, y tendrán una validez por 5 años, con vigilancia a los 12 y 32 meses desde la emisión del certificado. Adicional la revisión sería documental.</p> 
    <!-- ICONOS RETIE / RETILAP -->
    <div class="modal-icons-box">
        <!-- RETIE -->
        <div class="modal-icon-item">
            <div class="modal-icon-circle electric-icon">
                <i class="fa fa-plug plug-icon"></i>
            </div>
            <p class="modal-icon-label">RETIE</p>
        </div>

        <!-- RETILAP -->
        <div class="modal-icon-item">
            <div class="modal-icon-circle">
                <i class="fa fa-lightbulb-o"></i>
            </div>
            <p class="modal-icon-label">RETILAP</p>
        </div>
    </div>    
    
    `
  }
};

</script>



<script>
  // Función para abrir el modal de verificación
  function openBlogTecnicoModal(id) {
    document.getElementById("modalTitle").innerHTML = modalData[id].title;
    document.getElementById("modalImage").src = modalData[id].image;
    document.getElementById("modalText").innerHTML  = modalData[id].text;

   
    document.getElementById("modalBlogTecnico").classList.add("active");
    document.body.style.overflow = "hidden"; // Previene el scroll
  }

  // Función para cerrar el modal de verificación
  function closeBlogTecnicoModal() {
    document.getElementById("modalBlogTecnico").classList.remove("active");
    document.body.style.overflow = "auto"; // Restaura el scroll
  }

  // Cerrar modal al hacer clic fuera del contenido
  document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("modalBlogTecnico");

    if (modal) {
      modal.addEventListener("click", function (e) {
        if (e.target === modal) {
          closeBlogTecnicoModal();
        }
      });
    }

    // También cerrar con la tecla ESC
    document.addEventListener("keydown", function (e) {
      const blogTecnicoModal = document.getElementById("modalBlogTecnico");
      const cotizacionModal = document.getElementById("modalCotizacion");

      if (e.key === "Escape") {
        if (
          blogTecnicoModal &&
          blogTecnicoModal.classList.contains("active")
        ) {
          closeBlogTecnicoModal();
        }
        if (
          cotizacionModal &&
          cotizacionModal.classList.contains("active")
        ) {
          closeModal();
        }
      }
    });

    // MODIFICADO: Eliminado el event listener que prevenía el submit

    // Modificar el enlace del menú para abrir el modal
    const menuLinks = document.querySelectorAll(".navbar-nav .nav-link");

    menuLinks.forEach((link) => {
      if (link.textContent.trim() === "Verifica tu certificado") {
        link.href = "#";
        link.addEventListener("click", function (e) {
          e.preventDefault();
          openBlogTecnicoModal();
        });
      }
    });
  });
</script>

