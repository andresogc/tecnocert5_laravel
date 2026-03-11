<!-- Contenedor principal para texto y QR -->
<div class="qr-container">
  <!-- TEXTO flotante arriba del botón QR -->
  <!-- <div class="qr-text">
    Escanea el código QR y guarda nuestro contacto para recibir atención
    inmediata.
  </div> -->

  <!-- BOTÓN FLOTANTE QR -->
  <!-- <div class="qr-button" onclick="openQR(event)">
    <img src="/images/QR.png" alt="qr-icon" />
  </div> -->

  <!-- MODAL con QR grande -->
  <div class="qr-modal" id="qrModal" onclick="closeQR()">
    <div class="qr-modal-bg"></div>
    <div class="qr-modal-content" onclick="event.stopPropagation()">
      <!-- Globo de texto sobre el QR -->
      <div class="qr-modal-bubble">
        Escanea el código QR y guarda nuestro contacto para recibir atención inmediata.
      </div>
      <img src="{{asset('main-page/images/QR.png')}}" alt="qr-large" />
    </div>
  </div>
</div>
<style>
  /* Contenedor principal */
  .qr-container {
    position: fixed;
    right: 20px;
    bottom: 20px;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    z-index: 999;
  }

  /* Texto arriba del botón */
  .qr-text {
    width: 220px;
    background: white;
    padding: 10px 14px;
    margin-bottom: 10px;
    font-size: 13px;
    line-height: 1.3;
    color: #333;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
    transform: translateY(0);
  }

  /* Cuando el contenedor principal está en hover, el texto se mueve hacia arriba */
  .qr-container:hover .qr-text {
    transform: translateY(-10px);
  }

  /* Botón flotante QR */
  .qr-button {
    width: 40px;
    height: 40px;
    background: #1056a8;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
    transition: all 0.3s ease;
  }

  .qr-button img {
    width: 24px;
    height: 24px;
    filter: invert(1);
    transition: all 0.3s ease;
  }

  /* Cuando el contenedor principal está en hover, el botón crece */
  .qr-container:hover .qr-button {
    width: 168px;
    height: 168px;
  }

  .qr-container:hover .qr-button img {
    width: 110px;
    height: 110px;
  }

  /* Modal QR */
  .qr-modal {
    display: none;
    position: fixed;
    inset: 0;
    justify-content: center;
    align-items: center;
    z-index: 2000;
  }

  /* Fondo oscuro con blur */
  .qr-modal-bg {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0);
    backdrop-filter: blur(0px);
    transition: all 0.5s ease;
  }

  .qr-modal.show .qr-modal-bg {
    background: rgba(0, 0, 0, 0.4);
    backdrop-filter: blur(6px);
  }

  /* Contenido del modal */
  .qr-modal-content {
    background: white;
    padding: 15px;
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    z-index: 1;
    animation: zoomIn 0.25s ease;
  }

  .qr-modal-content img {
    width: 260px;
    height: 260px;
  }

  <blade keyframes|%20zoomIn%20%7B%0D>from {
    transform: scale(0.5);
    opacity: 0;
  }

  to {
    transform: scale(1);
    opacity: 1;
  }
  /* Globo de texto sobre el QR */
.qr-modal-content {
  position: relative; /* clave para posicionar el globo */
}

.qr-modal-bubble {
  position: absolute;
  top: -45px;
  left: 50%;
  transform: translateX(-50%);
  background: #1056a8;
  color: #fff;
  padding: 8px 14px;
  font-size: 13px;
  border-radius: 20px;
  white-space: nowrap;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
}

/* Flechita del globo */
.qr-modal-bubble::after {
  content: "";
  position: absolute;
  bottom: -6px;
  left: 50%;
  transform: translateX(-50%);
  border-width: 6px 6px 0 6px;
  border-style: solid;
  border-color: #1056a8 transparent transparent transparent;
}
</style>
<script>
  function openQR(event) {
    event?.preventDefault();
    const modal = document.getElementById("qrModal");
    modal.style.display = "flex";
    // Pequeño retraso para activar la transición del fondo
    setTimeout(() => {
      modal.classList.add("show");
    }, 10);
  }

  function closeQR() {
    const modal = document.getElementById("qrModal");
    modal.classList.remove("show");
    // Esperar a que termine la animación antes de ocultar
    setTimeout(() => {
      modal.style.display = "none";
    }, 300);
  }

  // También permitir cerrar con la tecla Escape
  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
      closeQR();
    }
  });

  // También permitir abrir con Enter cuando el botón tiene foco
  document
    .querySelector(".qr-button")
    .addEventListener("keydown", function (event) {
      if (event.key === "Enter") {
        openQR(event);
      }
    });

  // Añadir atributos de accesibilidad al botón
  document.querySelector(".qr-button").setAttribute("role", "button");
  document.querySelector(".qr-button").setAttribute("tabindex", "0");
</script>