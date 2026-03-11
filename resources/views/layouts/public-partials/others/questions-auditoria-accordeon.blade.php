<section class="ftco-section" style="padding-top:50px !important;background: #f8f9fd !important;
">
    <div class="container">
      <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <!-- <h2>Preguntas más frecuentes</h2> -->
           <h1 style="line-height: 1.5;
          color: rgba(0, 0, 0, 0.8);
          font-weight: 400;font-size: 24px; text-align: center; text-transform:uppercase;"><strong> Preguntas </strong>frecuentes</h1>
          <span class="subheading">P&R populares</span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 d-flex services align-self-stretch px-4 ftco-animate">
          <div class="d-block ">
            <!-- inicio acordeon columna 1  preguntas-->
            <div class="accordion" id="accordionLeft"></div>
            <!-- fin acordeon columna 1  preguntas-->
          </div>
        </div>
        <div class="col-md-6 d-flex services align-self-stretch px-4 ftco-animate">
          <div class="d-block ">
            <!-- inicio acordeon columna 2  preguntas-->
            <div class="accordion" id="accordionRight"></div>
            <!-- fin acordeon columna 2  preguntas-->
          </div>
        </div>

      </div>
    </div>
  </section>
   <style>
      .faq-btn::after{
        font-weight: normal !important;
      }
      
    </style>
    @push('scripts')
   <script>
    document.addEventListener('DOMContentLoaded', function () {

      fetch('{{ asset("main-page/data/faqs-auditoria.json") }}')
        .then(response => {
          if (!response.ok) {
            throw new Error('No se pudo cargar el JSON');
          }
          return response.json();
        })
        .then(faqs => {
          const leftAccordion = document.getElementById('accordionLeft');
          const rightAccordion = document.getElementById('accordionRight');

          const half = Math.ceil(faqs.length / 2);
          const leftFaqs = faqs.slice(0, half);
          const rightFaqs = faqs.slice(half);

          renderAccordion(leftFaqs, leftAccordion, 'accordionLeft');
          renderAccordion(rightFaqs, rightAccordion, 'accordionRight');
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
                  data-toggle="collapse"
                  data-target="#${collapseId}"
                  aria-expanded="false"
                  aria-controls="${collapseId}"
                  data-target="#faq1"
                  >
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
  @endpush