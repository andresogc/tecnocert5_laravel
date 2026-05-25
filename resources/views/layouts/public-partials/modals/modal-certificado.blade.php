<div class="modal-verificacion" id="modalVerificacion">
  <div class="modal-verificacion-content">
    <div class="modal-header">
      <h2><span><i class="fa fa-laptop"></i></span> Verifica tu Certificado</h2>
      <button class="modal-close" onclick="closeVerificationModal()">
        &times;
      </button>
    </div>
     <livewire:main-page.forms.verification-form />
   
  </div>
</div>
<style>
  /* MODAL DE VERIFICACIÓN - ESTILO COHERENTE */
  .modal-verificacion {
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

  .modal-verificacion.active {
    display: flex;
    opacity: 1;
  }

  .modal-verificacion-content {
    background: #0B1A42;
    width: 95%;
    max-width: 450px;
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


  .modal-verificacion .modal-header {
    margin-bottom: 1.5rem;
    color: white;
    position: relative;
    padding-bottom: 10px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    flex-shrink: 0;
    /* Evita que se reduzca */
  }

  .modal-verificacion .modal-header h2 {
    font-size: 1.5rem;
    margin: 0;
    color: white;
    font-weight: 600;
    padding-right: 30px;
    /* Espacio para el botón de cerrar */
  }

  .modal-verificacion .modal-close {
    position: absolute;
    top: -15px;
    right: -15px;
    background: #1056a8;
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

  .modal-verificacion .modal-close:hover {
    background: #0e4e96;
  }

  /* Contenedor del formulario con scroll interno si es necesario */
  .form-verificacion {
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
  .form-verificacion::-webkit-scrollbar {
    width: 6px;
  }

  .form-verificacion::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 3px;
  }

  .form-verificacion::-webkit-scrollbar-thumb {
    background: #1056a8;
    border-radius: 3px;
  }

  .form-verificacion::-webkit-scrollbar-thumb:hover {
    background: #0e4e96;
  }

  /* Estilos del formulario dentro del modal */
  .modal-verificacion .form-verificacion .form-group {
    margin-bottom: 1.2rem;
  }

  .modal-verificacion .form-verificacion label {
    display: block;
    color: white;
    margin-bottom: 0.5rem;
    font-size: 14px;
    font-weight: 500;
  }

  .modal-verificacion .form-verificacion .form-control {
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

  .modal-verificacion .form-verificacion .form-control:focus {
    outline: none;
    border-color: #1056a8;
    box-shadow: 0 0 0 2px rgba(16, 86, 168, 0.2);
  }

  .modal-verificacion .form-verificacion .form-control::placeholder {
    color: #aaa;
  }

  .modal-verificacion .form-verificacion select.form-control {
    cursor: pointer;
  }

  .modal-verificacion .form-verificacion textarea.form-control {
    resize: vertical;
    min-height: 80px;
    max-height: 150px;
    /* Limitar altura máxima del textarea */
  }

  .modal-verificacion .form-verificacion .submit {
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

  .modal-verificacion .form-verificacion .submit:hover {
    background: #0e4e96;
  }

  .modal-verificacion .form-footer {
    margin-top: 1rem;
    text-align: center;
    flex-shrink: 0;
    /* Evita que se reduzca */
  }

  .modal-verificacion .form-footer small {
    color: #aaa;
    font-size: 12px;
  }

  /* --- AJUSTES RESPONSIVOS --- */

  /* Pantallas Móviles (Celulares) */
  @media (max-width: 767px) {
    .modal-verificacion-content {
      width: 96% !important; /* Forzamos a que ocupe casi todo el ancho */
      max-width: none !important; /* Eliminamos cualquier restricción previa */
      padding: 1.25rem !important; /* Reducimos padding para ganar espacio interno */
    }

    .modal-verificacion .modal-header h2 {
      font-size: 1.2rem !important;
    }

    .modal-verificacion .form-verificacion .form-group {
      margin-bottom: 0.8rem !important;
    }

    .modal-verificacion .form-verificacion textarea.form-control {
      min-height: 60px !important;
      max-height: 100px !important;
    }

    .modal-verificacion .form-verificacion .form-control {
      padding: 0.6rem !important;
    }

    .modal-verificacion .modal-close {
      top: -10px !important;
      right: -10px !important;
      width: 28px !important;
      height: 28px !important;
      font-size: 1.3rem !important;
    }
  }

  /* Pantallas de Escritorio */
  @media (min-width: 768px) {
    .modal-verificacion-content {
      max-width: 450px !important; /* Ancho fijo elegante para PC */
      width: 100% !important;
    }
  }
</style>
<script>
  // Función para abrir el modal de verificación
  function openVerificationModal() {
    document.getElementById("modalVerificacion").classList.add("active");
    document.body.style.overflow = "hidden"; // Previene el scroll
  }

  // Función para cerrar el modal de verificación
  function closeVerificationModal() {
    document.getElementById("modalVerificacion").classList.remove("active");
    document.body.style.overflow = "auto"; // Restaura el scroll
  }

  // Cerrar modal al hacer clic fuera del contenido
  document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("modalVerificacion");

    if (modal) {
      modal.addEventListener("click", function (e) {
        if (e.target === modal) {
          closeVerificationModal();
        }
      });
    }

    // También cerrar con la tecla ESC
    document.addEventListener("keydown", function (e) {
      const verificationModal = document.getElementById("modalVerificacion");
      const cotizacionModal = document.getElementById("modalCotizacion");

      if (e.key === "Escape") {
        if (
          verificationModal &&
          verificationModal.classList.contains("active")
        ) {
          closeVerificationModal();
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
          openVerificationModal();
        });
      }
    });
  });
</script>
<!-- escript para enviar correo desde modal verificaicon -->
<script>
 /*  const formValidacion = document.getElementById('formVerificacion');
  const submitBtnValidacion = formValidacion.querySelector('button[type="submit"]');
  const toastContainerValidacion = document.getElementById('toast-container-verificacion');
  
  formValidacion.addEventListener('submit', function (e) {
    e.preventDefault();

    // Deshabilitar botón y mostrar "Procesando..."
    submitBtnValidacion.disabled = true;
    const originalText = submitBtn.innerHTML;
    submitBtnValidacion.innerHTML = 'Procesando...';

    const formData = new FormData(formValidacion);

    fetch('php/send_verification.php', {
        method: 'POST',
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        showToast(data.message, data.success ? 'success' : 'error');

        if (data.success) {
          // Limpiar formulario
          formValidacion.reset();

          // Cerrar modal manualmente
          setTimeout(() => {
            closeVerificationModal();
          }, 5000);

        }

      })
      .catch(err => {
        //console.error(err);
        showToast('Error al procesar la solicitud.', 'error');


      })
      .finally(() => {
        // Habilitar botón nuevamente
        submitBtnValidacion.disabled = false;
        submitBtnValidacion.innerHTML = originalText;
      });
  });

  // Función para mostrar Toast
  function showToast(message, type) {
    const toast = document.createElement('div');
    toast.className = 'toast toast-' + (type === 'success' ? 'success' : 'error');
    toast.innerText = message;
    toastContainerValidacion.appendChild(toast);

    // Desaparece después de 5 segundos
    setTimeout(() => {
      toast.style.animation = 'slideOut 0.5s forwards';
      setTimeout(() => toast.remove(), 500);
    }, 5000);
  } */
</script>