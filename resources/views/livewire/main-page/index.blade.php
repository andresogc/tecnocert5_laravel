
<div >
    
    @foreach ($index->sections as $section)
        @if ($section->name === 'hero inicio' )
            @include('livewire/main-page/index-sections/hero-inicio')
        @endif
        @if ($section->name === 'contact information' )
            @include('livewire/main-page/index-sections/contact-information')
        @endif
        @if ($section->name === 'services' )
            @include('livewire/main-page/index-sections/services')
        @endif
        @if ($section->name === 'certificate process' )
            @include('livewire/main-page/index-sections/certificate-process')
        @endif
        @if ($section->name === 'formats' )
            @include('livewire/main-page/index-sections/formats')
        @endif
        @if ($section->name === 'about' )
            @include('livewire/main-page/index-sections/about')
        @endif
        @if ($section->name === 'blog experts' )
            @include('livewire/main-page/index-sections/blog-experts')
        @endif
         @if ($section->name === 'subscribe' )
            @include('livewire/main-page/index-sections/subscribe')
        @endif
    @endforeach
</div>

 <script>
      $(document).ready(function () {
        $('.owl-carousel-faqs').owlCarousel({
          loop: true,
          autoplay: true,
          margin: 20,
          animateOut: 'fadeOut',
          animateIn: 'fadeIn',
          nav: true,
          dots: true,
          autoplayHoverPause: false,
          items: 3,
          responsive: {
            0: {
              items: 1
            },
            576: {
              items: 2
            },
            992: {
              items: 3
            },
            1200: {
              items: 4
            }
          }
        });
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const element = document.querySelector(".car-animation");

        if (!element) return;

        const observer = new IntersectionObserver(entries => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              element.classList.add("show");
              observer.unobserve(element); // ❌ no se repite
            }
          });
        }, {
          threshold: 0.4 // cuando el 40% del elemento es visible
        });

        observer.observe(element);
      });
    </script>





