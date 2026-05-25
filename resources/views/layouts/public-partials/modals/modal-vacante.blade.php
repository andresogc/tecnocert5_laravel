<div class="modal-vacante" id="modalVacante">
  <div class="modal-vacante-content">
    
    <livewire:main-page.forms.vacante-form />
  </div>
</div>
<style>
  /* MODAL DE VERIFICACIÓN - ESTILO COHERENTE */
  .modal-vacante {
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

  .modal-vacante.active {
    display: flex;
    opacity: 1;
  }

  .modal-vacante-content {
    background: #0B1A42;
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


  .modal-vacante .modal-header {
    margin-bottom: 1.5rem;
    color: white;
    position: relative;
    padding-bottom: 10px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    flex-shrink: 0;
    /* Evita que se reduzca */
  }

  .modal-vacante .modal-header h2 {
    font-size: 1.5rem;
    margin: 0;
    color: white;
    font-weight: 600;
    padding-right: 30px;
    /* Espacio para el botón de cerrar */
  }

  .modal-vacante .modal-close {
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

  .modal-vacante .modal-close:hover {
    background: #0e4e96;
  }

  /* Contenedor del formulario con scroll interno si es necesario */
  .form-vacante {
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
  .form-vacante::-webkit-scrollbar {
    width: 6px;
  }

  .form-vacante::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 3px;
  }

  .form-vacante::-webkit-scrollbar-thumb {
    background: #1056a8;
    border-radius: 3px;
  }

  .form-vacante::-webkit-scrollbar-thumb:hover {
    background: #0e4e96;
  }

  /* Estilos del formulario dentro del modal */
  .modal-vacante .form-vacante .form-group {
    margin-bottom: 1.2rem;
  }

  .modal-vacante .form-vacante label {
    display: block;
    color: white;
    margin-bottom: 0.5rem;
    font-size: 14px;
    font-weight: 500;
  }

  .modal-vacante .form-vacante .form-control {
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

  .modal-vacante .form-vacante .form-control:focus {
    outline: none;
    border-color: #1056a8;
    box-shadow: 0 0 0 2px rgba(16, 86, 168, 0.2);
  }

  .modal-vacante .form-vacante .form-control::placeholder {
    color: #aaa;
  }

  .modal-vacante .form-vacante select.form-control {
    cursor: pointer;
  }

  .modal-vacante .form-vacante textarea.form-control {
    resize: vertical;
    min-height: 80px;
    max-height: 150px;
    /* Limitar altura máxima del textarea */
  }

  .modal-vacante .form-vacante .submit {
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

  .modal-vacante .form-vacante .submit:hover {
    background: #0e4e96;
  }

  .modal-vacante .form-footer {
    margin-top: 1rem;
    text-align: center;
    flex-shrink: 0;
    /* Evita que se reduzca */
  }

  .modal-vacante .form-footer small {
    color: #aaa;
    font-size: 12px;
  }

  /* Media queries para ajustar en diferentes dispositivos */


  .modal-vacante .form-vacante .form-group {
    margin-bottom: 1rem;
  }

  .modal-vacante .form-vacante textarea.form-control {
    min-height: 60px;
    max-height: 100px;
  }


  .modal-vacante .modal-header h2 {
    font-size: 1.3rem;
  }

  .modal-vacante .form-vacante .form-group {
    margin-bottom: 0.8rem;
  }

  .modal-vacante .form-vacante .form-control {
    padding: 0.6rem;
  }




  .modal-vacante-content {
    padding: 1.5rem;
    max-width: 40%;
  }


  .modal-vacante .modal-header h2 {
    font-size: 1.2rem;
  }

  .modal-vacante .modal-close {
    top: -10px;
    right: -10px;
    width: 28px;
    height: 28px;
    font-size: 1.3rem;
  }

  .file-upload {
    border: 2px dashed #ccc;
    padding: 12px;
    border-radius: 8px;
    text-align: center;
    cursor: pointer;
    background: #f8f9fa;
    transition: 0.3s;
    position: relative;
  }

  .file-upload:hover {
    border-color: #0e4e96;
    background: #eef5ff;
  }

  .file-upload input[type="file"] {
    opacity: 0;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    cursor: pointer;
  }

  .file-upload label {
    cursor: pointer;
    color: #0e4e96;
    font-weight: 600;
  }

  #fileName {
    display: block;
    margin-top: 6px;
    font-size: 13px;
    color: #555;
  }

</style>
<script>
  // Función para abrir el modal de vacante
  function openVacanteModal(id, title) { 
    /* document.getElementById("modalVacante").classList.add("active");
    document.body.style.overflow = "hidden"; // Previene el scroll */
    const modal = document.getElementById("modalVacante");
    modal.classList.add("active");
    document.body.style.overflow = "hidden";

    // 🔥 Enviar datos a Livewire
    Livewire.dispatch('setVacanteData', {
        id: id,
        title: title
    });


  }

  // Función para cerrar el modal de vacante
  function closeVacanteModal() {
    document.getElementById("modalVacante").classList.remove("active");
    document.body.style.overflow = "auto"; // Restaura el scroll
  }

  // Cerrar modal al hacer clic fuera del contenido
  document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("modalVacante");

    if (modal) {
      modal.addEventListener("click", function (e) {
        if (e.target === modal) {
          closeVacanteModal();
        }
      });
    }

    // También cerrar con la tecla ESC
    document.addEventListener("keydown", function (e) {
      const vacanteModal = document.getElementById("modalVacante");
      const cotizacionModal = document.getElementById("modalCotizacion");

      if (e.key === "Escape") {
        if (
          vacanteModal &&
          vacanteModal.classList.contains("active")
        ) {
          closeVacanteModal();
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
          openVacanteModal();
        });
      }
    });
  });
</script>
<!-- escript para enviar correo desde modal verificaicon -->
<script>
 /*  const formVacante = document.getElementById('formVacante');
  const submitBtnVacante = formVacante.querySelector('button[type="submit"]');
  const toastContainerVacante = document.getElementById('toast-container-vacante');
  
  formVacante.addEventListener('submit', function (e) {
    e.preventDefault();

    const file = cvFile.files[0];

    if (!file) {
      showToastVacante("Debes adjuntar tu hoja de vida.", "error");
      return;
    }

    if (file.size > 2 * 1024 * 1024) { // 2MB
      showToastVacante("El archivo no debe superar 2MB.", "error");
      return;
    }

    // Deshabilitar botón y mostrar "Procesando..."
    submitBtnVacante.disabled = true;
    const originalText = submitBtnVacante.innerHTML;
    submitBtnVacante.innerHTML = 'Procesando...';

    const formData = new FormData(formVacante);

    fetch('php/send_vacante.php', {
        method: 'POST',
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        showToastVacante(data.message, data.success ? 'success' : 'error');

        if (data.success) {
          // Limpiar formulario
          formVacante.reset();

          // Cerrar modal manualmente
          setTimeout(() => {
            closeVacanteModal();
          }, 5000);

        }

      })
      .catch(err => {
        //console.error(err);
        showToastVacante('Error al procesar la solicitud.', 'error');


      })
      .finally(() => {
        // Habilitar botón nuevamente
        submitBtnVacante.disabled = false;
        submitBtnVacante.innerHTML = originalText;
      });
  });

  // Función para mostrar Toast
  function showToastVacante(message, type) {
    const toast = document.createElement('div');
    toast.className = 'toast toast-' + (type === 'success' ? 'success' : 'error');
    toast.innerText = message;
    console.log('toastContainerVacante',toastContainerVacante);
    toastContainerVacante.appendChild(toast);

    // Desaparece después de 5 segundos
    setTimeout(() => {
      toast.style.animation = 'slideOut 0.5s forwards';
      setTimeout(() => toast.remove(), 500);
    }, 5000);
  }*/
</script> 
<script>
  const cvFile = document.getElementById("cvFile");
const fileName = document.getElementById("fileName");

cvFile.addEventListener("change", function () {
  if (this.files.length > 0) {
    fileName.innerText = this.files[0].name;
  } else {
    fileName.innerText = "Ningún archivo seleccionado";
  }
});
</script>