<section class="ftco-section" id="vacancies-wrapper" style="background:#F8F9FA;padding-top: 50px;"  >
     @include('livewire.main-page.work-sections.vacancies-content',['vacancies'=>$vacancies])
</section>

@include('layouts.public-partials.modals.modal-vacante')

@push('scripts')
   <script>
    
document.addEventListener('livewire:init', () => {

    Livewire.hook('morph.updated', () => {
        console.log('🔥 Livewire DOM updated');
       
        initVacancyAccordion();    
       
        
    });

});
   </script>
@endpush