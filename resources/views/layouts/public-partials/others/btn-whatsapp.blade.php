<a href="https://wa.me/573103366204" class="whatsapp-float" target="_blank">
    <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/whatsapp.svg" alt="WhatsApp" />
  </a>
  <style>
    .whatsapp-float {
      position: fixed;
      left: 20px;
      /* posición a la izquierda */
      bottom: 20px;
      /* altura desde abajo */
      width: 60px;
      height: 60px;
      background: #25d366;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
      z-index: 999;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .whatsapp-float img {
      width: 32px;
      height: 32px;
      filter: invert(1);
    }

    .whatsapp-float:hover {
      transform: scale(1.1);
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.35);
    }
  </style>