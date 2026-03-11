<div>
    @foreach ($capacitacion->sections as $section)
        @if ($section->name === 'hero capacitacion' )
            @include('livewire/main-page/capacitacion-sections/hero-capacitacion')
        @endif
         @if ($section->name === 'Capacitación' )
            @include('livewire/main-page/capacitacion-sections/capacitacion')
        @endif
        @if ($section->name === 'Beneficios de nuestros programas de capacitación' )
            @include('livewire/main-page/capacitacion-sections/beneficios')
        @endif
        @if ($section->name === 'Nuestras capacitaciones en Sistemas de Gestión te permiten:' )
            @include('livewire/main-page/capacitacion-sections/nuestras-capacitaciones')
        @endif
        @if ($section->name === 'subscribe' )
            @include('livewire/main-page/capacitacion-sections/subscribe')
        @endif
    @endforeach
</div>
