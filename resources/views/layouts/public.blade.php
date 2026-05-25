<!DOCTYPE html>
<html lang="es">

   
  @includeIf('layouts.public-partials.heads.' . ($headType ?? 'head')) 
  


<body >
  
  @include('layouts.public-partials.headers.contact_header' )

  @includeIf('layouts.public-partials.navbar.' . ($navbarType ?? 'navbar'))

  @includeIf('layouts.public-partials.headers.' . ($headerType ?? 'header'))
  
  {{ $slot }}

  @include('layouts.public-partials.others.cursor-animate')
    
  @includeIf('layouts.public-partials.footers.' . ($footerType ?? 'footer'))  

  @include('layouts.public-partials.others.loader')

  @include('layouts.public-partials.others.btn-whatsapp')

  @include('layouts.public-partials.others.btn-qr')

  @include('layouts.public-partials.others.lateral_menu')
  
  @include('layouts.public-partials.modals.modal-certificado')

{{--   @include('layouts.public-partials.modals.modal-blog-tecnico', [
    'showModal' => $showModal,
    'selectedPost' => $selectedPost
]) --}}

  @include('layouts.public-partials.scripts.scripts-js')
  
     
  <script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('scroll-to-top', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    });
</script>

  <script>
     document.addEventListener('livewire:init', () => {

            Livewire.on('toast', (data) => {
                console.log('data',data);
                showToastCotizacion(data.message, data.type,data.form);
            });

        });
  </script>
  <script>
    // Función para mostrar Toast
    function showToastCotizacion(message, type, form) {

        const container = document.querySelector(
            '.toast-container-' + form
        );

        if (!container) {
            console.warn('No se encontró el contenedor del toast');
            return;
        }

        container.innerHTML = '';

        const toast = document.createElement('div');

        toast.className = 'toast toast-' + type;

        toast.innerText = message;

        container.appendChild(toast);

        console.log('toast', toast);
        console.log('container', container);


        setTimeout(() => {

            toast.style.animation = 'slideOut 0.5s forwards';

            setTimeout(() => {
                toast.remove();
            }, 500);

        }, 5000);
    }
  </script>

@stack('scripts')
</body>


</html>
