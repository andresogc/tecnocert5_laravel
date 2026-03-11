<script src="{{asset('main-page/js/jquery.min.js')}}"></script>
  <script src="{{asset('main-page/js/jquery-migrate-3.0.1.min.js')}}"></script>

  <script src="{{asset('main-page/js/popper.min.js')}}"></script>
  <script src="{{asset('main-page/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('main-page/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('main-page/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('main-page/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('main-page/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('main-page/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('main-page/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('main-page/js/scrollax.min.js')}}"></script>
  
  </script>
  <script src="{{asset('main-page/js/google-map.js')}}"></script>
  <script src="{{asset('main-page/js/main.js')}}"></script>
  <script src="{{asset('main-page/js/particles/particles.js')}}"></script>
  <script src="{{asset('main-page/js/particles-config.js')}}"></script>
  <script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script> 
  <script src="https://www.google.com/recaptcha/api.js?render=6LcndF4sAAAAAEa4r-YF1CGyBlcRgaJAoit_eN7J"></script>



  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-23581568-13");
  </script>

  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
    integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
    data-cf-beacon='{"version":"2024.11.0","token":"cd0b4b3a733644fc843ef0b185f98241","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
    crossorigin="anonymous"></script>

    
<script>
const dot = document.querySelector('.cursor-dot');
const circle = document.querySelector('.cursor-circle');

const DOT_OFFSET = 4;
const CIRCLE_OFFSET = 20;

// Movimiento suave y controlado
const moveDotX = gsap.quickTo(dot, "x", {
  duration: 0.15,
  ease: "power3.out"
});
const moveDotY = gsap.quickTo(dot, "y", {
  duration: 0.15,
  ease: "power3.out"
});

const moveCircleX = gsap.quickTo(circle, "x", {
  duration: 0.8,
  ease: "power3.out"
});
const moveCircleY = gsap.quickTo(circle, "y", {
  duration: 0.8,
  ease: "power3.out"
});

window.addEventListener("mousemove", e => {
  moveDotX(e.clientX - DOT_OFFSET);
  moveDotY(e.clientY - DOT_OFFSET);

  moveCircleX(e.clientX - CIRCLE_OFFSET);
  moveCircleY(e.clientY - CIRCLE_OFFSET);
});
</script>


 <script>
    document.addEventListener('DOMContentLoaded', function () {

      fetch('{{asset("main-page/data/faqs-capacitacion1.json")}}')
        .then(response => {
          if (!response.ok) {
            throw new Error('No se pudo cargar el JSON');
          }
          return response.json();
        })
        .then(faqs => {
          const accordion = document.getElementById('accordion-capacitacion1');

          renderAccordion(faqs, accordion, 'accordion-capacitacion1');
          
        })
        .catch(error => {
          console.error('Error cargando FAQs:', error);
        });

      function renderAccordion(faqList, container, accordionId) {
        faqList.forEach((faq, index) => {
          const collapseId = `${accordionId}-collapse-${index}`;
          const headingId = `${accordionId}-heading-${index}`;

          // Convertir array en lista HTML
          let answerHtml = '';

          if (Array.isArray(faq.answer)) {
            answerHtml = '<ul>';
            faq.answer.forEach(item => {
              answerHtml += `<span style="text-transform:justify;padding-left:0px !important">${item}</span>`;
            });
            answerHtml += '</ul>';
          } else {
            answerHtml = faq.answer; // por si viene texto normal
          }

          container.innerHTML += `
            <div class="card">
              <div class="card-header p-0" id="${headingId}">
                <h2 class="mb-0">
                  <button class="btn btn-link faq-btn faq-btn-hover collapsed text-left px-0" type="button"
                  style="font-weight: normal !important;"
                    data-toggle="collapse"
                    data-target="#${collapseId}"
                    aria-expanded="false"
                    aria-controls="${collapseId}">
                    <i class="fa fa-check icon-question"></i>
                    ${faq.question}
                  </button>
                </h2>
              </div>

              <div id="${collapseId}" class="collapse"
                aria-labelledby="${headingId}"
                data-parent="#${accordionId}">
                <div class="card-body">
                  ${answerHtml}
                </div>
              </div>
            </div>
          `;
        });
      }


    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {

      fetch('{{asset("main-page/data/faqs-capacitacion2.json")}}')
        .then(response => {
          if (!response.ok) {
            throw new Error('No se pudo cargar el JSON');
          }
          return response.json();
        })
        .then(faqs => {
          const accordion = document.getElementById('accordion-capacitacion2');

          renderAccordion(faqs, accordion, 'accordion-capacitacion2');
          
        })
        .catch(error => {
          console.error('Error cargando FAQs:', error);
        });

      function renderAccordion(faqList, container, accordionId) {
        faqList.forEach((faq, index) => {
          const collapseId = `${accordionId}-collapse-${index}`;
          const headingId = `${accordionId}-heading-${index}`;

          container.innerHTML += `
          <div class="card">
            <div class="card-header p-0" id="${headingId}">
              <h2 class="mb-0">
                <button class="btn btn-link faq-btn collapsed text-left px-0" type="button"
                  style="font-weight: normal !important;"
                  data-toggle="collapse"
                  data-target="#${collapseId}"
                  aria-expanded="false"
                  aria-controls="${collapseId}">
                  <i class="fa fa-question-circle icon-question"></i>
                  ${faq.question}
                </button>
              </h2>
            </div>

            <div id="${collapseId}" class="collapse"
              aria-labelledby="${headingId}"
              data-parent="#${accordionId}">
              <div class="card-body">
                ${faq.answer}
              </div>
            </div>
          </div>
        `;
        });
      }

    });
  </script>

<!-- acordeon vacnate -->

<script>
    document.addEventListener('DOMContentLoaded', function () {

      fetch('{{asset("main-page/data/vacante.json")}}')
        .then(response => {
          if (!response.ok) {
            throw new Error('No se pudo cargar el JSON');
          }
          return response.json();
        })
        .then(faqs => {
          const accordion = document.getElementById('accordion-vacante');

          renderAccordion(faqs, accordion, 'accordion-vacante');
          
        })
        .catch(error => {
          console.error('Error cargando FAQs:', error);
        });

    function renderAccordion(faqList, container, accordionId) {

          container.innerHTML = ""; // limpiar antes (opcional)

          faqList.forEach((faq, index) => {
            const collapseId = `${accordionId}-collapse-${index}`;
            const headingId = `${accordionId}-heading-${index}`;

            // Si answer es un array -> crear lista
            let answerHTML = "";

            if (Array.isArray(faq.answer)) {
              answerHTML = "<ul>";
              faq.answer.forEach(item => {
                answerHTML += `<li>${item}</li>`;
              });
              answerHTML += "</ul>";
            } else {
              // Si no es array, mostrar texto normal
              answerHTML = faq.answer;
            }

            container.innerHTML += `
              <div class="card">
                <div class="card-header p-0" id="${headingId}">
                  <h2 class="mb-0">
                    <button class="btn btn-link faq-btn collapsed text-left px-0" type="button"
                      data-toggle="collapse"
                      data-target="#${collapseId}"
                      aria-expanded="false"
                      aria-controls="${collapseId}">
                      <i class="fa fa-question-circle icon-question"></i>
                      ${faq.question}
                    </button>
                  </h2>
                </div>

                <div id="${collapseId}" class="collapse"
                  aria-labelledby="${headingId}"
                  data-parent="#${accordionId}">
                  <div class="card-body">
                    ${answerHTML}
                  </div>
                </div>
              </div>
            `;
          });
        }


    });
  </script>








<!-- para abrir acodderon al hacer hover -->




<script>
 document.addEventListener('DOMContentLoaded', function () {

  const isMobile = window.matchMedia("(max-width: 768px)").matches;
  let hoverTimeout = null;
  let currentTarget = null;

  // ===== DESKTOP HOVER =====
  if (!isMobile) {

    document.addEventListener('mouseover', function(e) {
      const btn = e.target.closest('.faq-btn-hover');
      if (!btn) return;

      const target = btn.getAttribute('data-target');
      if (target === currentTarget) return; // ya está abierto

      currentTarget = target;
      clearTimeout(hoverTimeout);

      // cerrar todos sin animación
      document.querySelectorAll('.collapse').forEach(c => {
        $(c).stop(true, true).removeClass('show');
      });

      // abrir con delay mínimo
      hoverTimeout = setTimeout(() => {
        $(target).collapse('show');
      }, 80);
    });

    document.addEventListener('mouseout', function(e) {
      const btn = e.target.closest('.faq-btn-hover');
      if (!btn) return;

      const target = btn.getAttribute('data-target');

      clearTimeout(hoverTimeout);
      hoverTimeout = setTimeout(() => {
        $(target).collapse('hide');
        currentTarget = null;
      }, 150);
    });

  }

  // ===== MOBILE CLICK =====
  if (isMobile) {
    document.addEventListener('click', function(e) {
      const btn = e.target.closest('.faq-btn-hover');
      if (!btn) return;

      const target = btn.getAttribute('data-target');

      document.querySelectorAll('.collapse').forEach(c => {
        if ("#" + c.id !== target) {
          $(c).collapse('hide');
        }
      });

      $(target).collapse('toggle');
    });
  }

});


</script>






    



    