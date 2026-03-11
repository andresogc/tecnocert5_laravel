<div>
    @foreach ($work->sections as $section)
        @if ($section->name === 'Hero trabaja con nosotros' )
            @include('livewire/main-page/work-sections/hero-trabaja')
        @endif
         @if ($section->name === 'vacantes disponibles' )
            @include('livewire/main-page/work-sections/vacantes')
        @endif
      
    @endforeach
</div>