particlesJS("particles-js", {
  particles: {
    number: { value: 300 },
    color: { value: "#9ecfff" },
    shape: { type: "circle" },
    opacity: { value: 0.4 },
    size: { value: 2 },
    line_linked: { enable: false },
    move: {
      enable: true,
      speed: 1,
      direction: "bottom-right",
      straight: true,
      out_mode: "out"
    }
  },

  interactivity: {
    detect_on: "canvas",
    events: {
      onhover: { enable: true, mode: "repulse" },
      onclick: { enable: false }
    },
    modes: {
      repulse: { distance: 80 }
    }
  },

  retina_detect: true
});