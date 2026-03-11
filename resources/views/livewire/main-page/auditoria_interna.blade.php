<div>
    @foreach ($auditoriaInterna->sections as $section)
        @if ($section->name === 'hero auditoria interna' )
            @include('livewire/main-page/auditoria-sections/hero-auditoria')
        @endif
         @if ($section->name === 'Auditoría Interna' )
            @include('livewire/main-page/auditoria-sections/auditoria-interna')
        @endif
        @if ($section->name === 'La auditoría interna de Tecnocert' )
            @include('livewire/main-page/auditoria-sections/auditoria-interna-2')
        @endif
        @if ($section->name === 'Beneficios en auditoría interna con Tecnocert' )
            @include('livewire/main-page/auditoria-sections/beneficios')
        @endif
        @if ($section->name === 'Preguntas frecuentes' )
            @include('livewire/main-page/auditoria-sections/preguntas-frecuentes')
        @endif
        @if ($section->name === 'subscribe' )
            @include('livewire/main-page/auditoria-sections/subscribe')
        @endif
    @endforeach
</div>
