<div >
    
    @foreach ($iso9001->sections as $section)
        @if ($section->name === 'hero iso 9001:2015' )
            @include('livewire/main-page/iso9001-sections/hero-iso-9001')
        @endif
        @if ($section->name === 'Sistemas de Gestión de la Calidad' )
            @include('livewire/main-page/iso9001-sections/sistemas-de-gestion')
        @endif
        @if ($section->name === 'Principios de gestión de calidad' )
            @include('livewire/main-page/iso9001-sections/principios-de-gestion')
        @endif
        @if ($section->name === 'certificate process' )
            @include('livewire/main-page/iso9001-sections/certificate-process')
        @endif
        
        @if ($section->name === 'subscribe' )
            @include('livewire/main-page/iso9001-sections/subscribe')
        @endif
    @endforeach
</div>
