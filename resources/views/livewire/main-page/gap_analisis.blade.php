<div>
    @foreach ($gapAnalisis->sections as $section)
        @if ($section->name === 'hero GAP analisis' )
            @include('livewire/main-page/gap-sections/hero-gap')
        @endif
         @if ($section->name === 'GAP análisis' )
            @include('livewire/main-page/gap-sections/gap-analisis')
        @endif
        @if ($section->name === 'El análisis de brechas puede permitirles' )
            @include('livewire/main-page/gap-sections/analisis-brechas')
        @endif
        @if ($section->name === 'Preguntas frecuentes' )
            @include('livewire/main-page/gap-sections/preguntas-frecuentes')
        @endif
        @if ($section->name === 'subscribe' )
            @include('livewire/main-page/gap-sections/subscribe')
        @endif
    @endforeach
</div>
