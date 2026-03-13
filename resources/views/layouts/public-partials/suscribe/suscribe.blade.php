<div>
    <section class="ftco-section ftco-no-pb ftco-no-pt">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="bg-secondary w-100 rounded p-4">
                        <div class="row">
                            <div class="col-md-7 d-flex align-items-center">
                                <h2 class="mb-3 mb-sm-0" style="color: white; font-size: 18px">
                                    Suscríbete y acompáñanos con contenido pensado para ti
                                </h2>
                            </div>
                            <div class="col-md-5 d-flex align-items-center">

                                <livewire:main-page.forms.suscribe-form />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const formSuscription = document.getElementById('formSuscription');
        const submitBtnSuscription = document.getElementById('btnSuscription');
        const toastContainerSuscription = document.getElementById('toast-container-suscription');

        formSuscription.addEventListener('submit', function(e) {
            e.preventDefault();
                console.log('submitBtnSuscription',submitBtnSuscription);
            // Deshabilitar botón y mostrar "Procesando..."
            submitBtnSuscription.disabled = true;
            const originalText = submitBtnSuscription.value;
            submitBtnSuscription.value = 'Procesando...';

            const formData = new FormData(formSuscription);

            fetch('php/send_suscription.php', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                
                showToastSuscription(data.message, data.success ? 'success' : 'error');
            
                if(data.success) {
                    // Limpiar formulario
                    formSuscription.reset();

                
                }
            })
            .catch(err => {
            // console.error(err);
                showToastSuscription('Error al procesar la solicitud.', 'error');
            })
            .finally(() => {
                // Habilitar botón nuevamente
                submitBtnSuscription.disabled = false;
                submitBtnSuscription.value = originalText;
            });
        });

        // Función para mostrar Toast
        function showToastSuscription(message, type) { 
            const toast = document.createElement('div');
            toast.className = 'toast toast-' + (type === 'success' ? 'success' : 'error');
            toast.innerText = message;
            toastContainerSuscription.appendChild(toast);

            // Desaparece después de 5 segundos
            setTimeout(() => {
                toast.style.animation = 'slideOut 0.5s forwards';
                setTimeout(() => toast.remove(), 500);
            }, 5000);
        }
    </script>
</div>