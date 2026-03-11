<style>
        .footer-menu .submenu {
            display: none;
            padding-left: 15px;
        }

        .footer-menu .has-submenu:hover .submenu {
            display: block;
        }

        .footer-menu a {
            text-decoration: none;
        }
    </style>

<footer class="footer">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-md-9 py-5" style="padding-bottom: 0px !important;">
                <div class="row">
                    <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading d-flex justify-content-center" >¡SOMOS TECNOCERT!</h2>
                        <p style="text-align: justify; color:rgba(255, 255, 255, 0.5);">
                            Nuestro enfoque se centra en aportar confianza, mejorar los
                            procesos operativos y fortalecer la competitividad de las
                            empresas, asegurando que cada certificación refleje un
                            compromiso real con la excelencia y la mejora continua.
                        </p>
                        <ul class="ftco-footer-social p-0">
                            <li class="ftco-animate">
                                <a href="https://www.facebook.com/people/Tecnocert/61586403569607/" data-toggle="tooltip" data-placement="top" title="Facebook"><span
                                        class="fa fa-facebook"></span></a>
                            </li>
                            <li class="ftco-animate">
                                <a href="https://www.instagram.com/tecnocert_col/" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram"><span
                                        class="fa fa-instagram"></span></a>
                            </li>
                            <li class="ftco-animate">
                                <a href="https://www.linkedin.com/company/tecnocert/" data-toggle="tooltip" data-placement="top" title="Linkedin"><span
                                        class="fa fa-linkedin"></span></a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="col-md-8">
                        <div class="row justify-content-end">
                            <div class="col-md-12 col-lg-10">
                                <!-- inicio card  1-->
                                
                                        <div class="row">
                                            <div class="col-md-4 mb-md-0 mb-4">

                                                <h2 class="footer-heading">Nuestros servicios</h2>

                                                <ul class="list-unstyled footer-menu">
                                                    <li class="has-submenu">
                                                        <a href="javascript:void(0)" class="py-1 d-block">
                                                            Sistemas de gestión ▾
                                                        </a>

                                                        <ul class="submenu list-unstyled">
                                                            <li><a href="{{route('iso9001')}}">ISO 9001:2015</a></li>

                                                        </ul>
                                                    </li>
                                                </ul>

                                                <ul class="list-unstyled footer-menu">
                                                    <li class="has-submenu">
                                                        <a href="{{route('gap_analisis')}}" class="py-1 d-block">
                                                            GAP Análisis
                                                        </a>
                                                    </li>
                                                    <li class="has-submenu">
                                                        <a href="{{route('auditoria_interna')}}" class="py-1 d-block">
                                                            Auditoría Interna

                                                        </a>
                                                    </li>
                                                    <li class="has-submenu">
                                                        <a href="{{route('capacitacion')}}" class="py-1 d-block">
                                                            Capacitación
                                                        </a>
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="col-md-8 mb-md-0 mb-4">
                                                <h2 class="footer-heading">Términos y condiciones</h2>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="{{asset('main-page/files/USOLOGO-TECNOCERT.pdf')}}" class="py-1 d-block"
                                                            target="_blank">Procedimiento del
                                                            uso del logo.</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{asset('main-page/files/TC-PC-02_V1_Procedimiento_de_certificación_terminos_y_condiciones.pdf')}}"
                                                            class="py-1 d-block" target="_blank"
                                                            style="text-align: justify;">Procedimiento de certificación
                                                            términos y
                                                            condiciones.</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{asset('main-page/files/TC-POLADM-01-2_V1_Politica_de_Calidad_e_imparcialidad.pdf')}}"
                                                            class="py-1 d-block" target="_blank"
                                                            style="text-align: justify;">Política de calidad e
                                                            imparcialidad.</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{asset('main-page/files/TC-POLADM-01-4_V1_Politica_de_tratamiento_de_datos_personales.pdf')}}"
                                                            class="py-1 d-block" target="_blank"
                                                            style="text-align: justify;">Política de tratamiento de
                                                            datos personales.</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{asset('main-page/files/TC-PO-02_V1_Procedimiento_Quejas_y_apelaciones.pdf')}}"
                                                            class="py-1 d-block" target="_blank"
                                                            style="text-align: justify;">Procedimiento quejas y
                                                            apelaciones.</a>
                                                    </li>
                                                    <!-- <li>
                                                        <a href="{{asset('main-page/files/TC-FO-02-1_V1_Formato_Quejas_y_apelaciones.docx')}}"
                                                            class="py-1 d-block" target="_blank"
                                                            style="text-align: justify;">Formato quejas y
                                                            apelaciones.</a>
                                                    </li> -->
                                                </ul>
                                            </div>
                                        </div>
                                   
                                <!-- fin card  1-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-md-5">
                    <div class="col-md-12">
                        <p class="copyright" style="color:rgba(255, 255, 255, 0.5);">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            Todos los derechos reservados | Diseño y desarrollo
                            <a href="https://pcingenieria.com.co/" target="_blank">PC Ingeniería</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5" style="padding-bottom: 0px !important;">
                <div id="toast-container-cotizacion"></div>
                <!--    iniico card 2 -->
                
                        
                        <h2 class="footer-heading">Solicita tu cotización</h2>
                        <!-- CAMBIADO: action ahora apunta a php/send_mail.php -->
                        <form id="formCotizacion" class="form-consultation" >
                            <!-- ELIMINADOS: Los campos ocultos de Formspree -->

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombres y apellidos" name="nombre"
                                    required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email" required />
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Télefono" name="telefono"
                                    required />
                            </div>
                            <div class="form-group">
                                <textarea name="mensaje" cols="30" rows="3" class="form-control"
                                    placeholder="Orientanos sobre tu solicitud" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control submit px-3">
                                    Enviar solicitud
                                </button>
                            </div>
                            
                        </form>
                    
                <!-- fin card  2-->


            </div>
        </div>
    </div>
    <style>
        footer .list-unstyled li a {
            transition: color 0.3s ease;
        }

        footer .list-unstyled li a:hover {
            color: #1056a8 !important;
        }

        footer .ftco-footer-social a {
            transition: all 0.3s ease;
        }

        footer .ftco-footer-social a:hover {
            color: #1056a8 !important;
        }

        footer .copyright a {
            transition: color 0.3s ease;
        }

        footer .copyright a:hover {
            color: #1056a8 !important;
        }

        footer .submit {
            transition: background-color 0.3s ease;
        }

        footer .submit:hover {
            background-color: #1056a8 !important;
        }
    </style>
</footer>
<script>
const form = document.getElementById('formCotizacion');
const submitBtn = form.querySelector('button[type="submit"]');
const toastContainer = document.getElementById('toast-container-cotizacion');

form.addEventListener('submit', function(e) {
    e.preventDefault();

    // Deshabilitar botón y mostrar "Procesando..."
    submitBtn.disabled = true;
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = 'Procesando...';

    const formData = new FormData(form);

    fetch('php/send_mail.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        console.log("RESPUESTA SERVIDOR:", data);
        showToastCotizacion(data.message, data.success ? 'success' : 'error');
    
        if(data.success) {
            // Limpiar formulario
            form.reset();

            // Opcional: si quieres cerrar modal o sección, agregar aquí
            // Ejemplo: si fuera un modal con id "modalCotizacion":
            // setTimeout(() => closeCotizacionModal(), 5000);
        }
    })
    .catch(err => {
        console.error(err);
        showToastCotizacion('Error al procesar la solicitud.', 'error');
    })
    .finally(() => {
        // Habilitar botón nuevamente
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
    });
});

// Función para mostrar Toast
function showToastCotizacion(message, type) { 
    const toast = document.createElement('div');
    toast.className = 'toast toast-' + (type === 'success' ? 'success' : 'error');
    toast.innerText = message;
    toastContainer.appendChild(toast);

    // Desaparece después de 5 segundos
    setTimeout(() => {
        toast.style.animation = 'slideOut 0.5s forwards';
        setTimeout(() => toast.remove(), 500);
    }, 5000);
}
</script>
