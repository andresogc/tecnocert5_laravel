<div >
    @foreach ($questions->sections as $section)
        @if ($section->name === 'hero questions' )
            @include('livewire/main-page/questions-sections/hero-questions')
        @endif
        @if ($section->name === 'questions' )
            @include('livewire/main-page/questions-sections/questions')
        @endif
    @endforeach
</div>
