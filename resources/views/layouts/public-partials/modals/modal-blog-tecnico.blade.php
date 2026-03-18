
<div id="modalBlogTecnico" class="modal-blog-tecnico">

    <div class="modal-blog-tecnico-content">

      <div class="modal-header">
        <div id="modalTitle" style="color: #0B1A42"><span><i class="fa fa-laptop"></i></span> </div>
        <button class="modal-close" onclick="closeBlogTecnicoModal()">
          &times;
        </button>

      </div>

      <div class="modal-body">

          <img 
              id="modalImage"
              src=""
              alt=""
              class="modal-img"
          >

          <div id="modalText" class="modal-text"></div>

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
        margin-right: 30px;
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
      .modal-text {
        font-family: "Poppins", Arial, sans-serif;
        text-align: justify;
        font-size: 14px;
        line-height: 1.5;
        /* white-space: pre-line; */
        /* margin-top: -18px; */
        padding-right:20px;
        color: #0B1A42
      }

      .modal-text p{
        font-family: "Poppins", Arial, sans-serif;
        font-size: 14px;
        line-height: 1.5;
        font-weight: 400;
        padding-right:20px;
        color: #0B1A42;
      /*   margin-bottom: 0 !important; */
        margin-top: 0;
        margin-bottom: 8px; /* 👈 controla separación real */
      }

       .modal-text li{
         text-align: justify;
          padding-right: 20px;
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
       /*  margin-top: -30px;
        margin-bottom: -70px; */
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
</div>




