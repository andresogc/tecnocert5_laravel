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

  @include('layouts.public-partials.modals.modal-blog-tecnico')

  @include('layouts.public-partials.scripts.scripts-js')
  
     
  <script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('scroll-to-top', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    });
</script>


@stack('scripts')
</body>


</html>
