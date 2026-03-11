<div>
    @foreach ($blog->sections as $section)
        @if ($section->name === 'hero novedades técnicas' )
            @include('livewire/main-page/blog-sections/hero-novedades')
        @endif
         @if ($section->name === 'CONOCE TODAS LAS NOTICIAS QUE' )
            @include('livewire/main-page/blog-sections/noticias')
        @endif
        @if ($section->name === 'Conoce más acerca de nuestros servicios' )
            @include('livewire/main-page/blog-sections/conoce')
        @endif
    @endforeach
</div>