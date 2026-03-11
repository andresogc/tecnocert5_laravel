<div>
    @foreach ($contact->sections as $section)
        @if ($section->name === 'Hero contacto' )
            @include('livewire/main-page/contact-sections/hero-contact')
        @endif
         @if ($section->name === 'Contáctanos' )
            @include('livewire/main-page/contact-sections/contactanos')
        @endif
        @if ($section->name === 'map' )
            @include('livewire/main-page/contact-sections/map')
        @endif
      
    @endforeach
</div>