<?php

namespace App\Livewire\Admin\ManageSite;

use App\Models\Vacancy;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;

class VacancyForms extends Component
{   

    public $title, $summary,$status;
    public array $main_responsibilities = [''];
    public array $academic_requirements = [''];
    public array $experience_requirements = [''];
    public array $skills = [''];
    public array $benefits = [''];
    public $isEditMode = false;
    public $editVacancy;
    public array $statusOptions = [
        ['id' => 'draft', 'name' => 'Borrador'],
        ['id' => 'active', 'name' => 'Activo'],
        ['id' => 'inactive', 'name' => 'Inactivo'],
        ['id' => 'closed', 'name' => 'Cerrado'],
    ];

    public function mount($vacancy = null)
    {   

        if ($vacancy) {
            $this->isEditMode = true;
            $this->editVacancy = Vacancy::with('media')->findOrFail($vacancy);

            // Cargar datos de vacante
            $this->title = $this->editVacancy->title;
            $this->summary = $this->editVacancy->summary;
            $this->main_responsibilities = $this->editVacancy->main_responsibilities ?? [''];
            $this->academic_requirements = $this->editVacancy->academic_requirements ?? [''];
            $this->experience_requirements = $this->editVacancy->experience_requirements ?? [''];
            $this->skills = $this->editVacancy->skills ?? [''];
            $this->benefits = $this->editVacancy->benefits ?? [''];

            $this->status = $this->editVacancy->status;

            

        } else {
            $this->main_responsibilities = [''];
            $this->academic_requirements = [''];
            $this->experience_requirements = [''];
            $this->skills = [''];
            $this->benefits = [''];
            $this->isEditMode = false;
            $this->resetForm();
        }
    }

    public function resetForm(){
        $this->title = '';
        $this->summary = '';
        $this->main_responsibilities = [''];
        $this->academic_requirements = [''];
        $this->experience_requirements = [''];
        $this->skills = [''];
        $this->benefits = [''];
        $this->status = '';
    }

    public function store(){
    
        $this->editVacancy = null; // por seguridad
        $this->validate([
            'title' => 'required|string|max:255',
            'summary' => 'required|string|max:2000',

            'main_responsibilities' => 'required|array|min:1',
            'main_responsibilities.*' => 'required|string|max:255',

            'academic_requirements' => 'required|array|min:1',
            'academic_requirements.*' => 'required|string|max:255',

            'experience_requirements' => 'required|array|min:1',
            'experience_requirements.*' => 'required|string|max:255',

            'skills' => 'required|array|min:1',
            'skills.*' => 'required|string|max:255',

            'benefits' => 'required|array|min:1',
            'benefits.*' => 'required|string|max:255',

            'status' => 'required|in:draft,active,inactive,closed',
        ]);

        try {

            DB::transaction(function () {

                $vacancies = Vacancy::create([
                    'title' => $this->title,
                    'summary' => $this->summary,
                    'main_responsibilities' => $this->main_responsibilities,
                    'academic_requirements' => $this->academic_requirements,
                    'experience_requirements' => $this->experience_requirements,
                    'skills' => $this->skills,
                    'benefits' => $this->benefits,
                    'status' => $this->status,
                    'user_id' => auth()->user()->id,
                    'published_at' => $this->status === 'active' ? now() : null ,
                ]);

                $this->dispatch('show-toast', [
                    'type' => 'success',
                    'message' => 'Vacante creada exitosamente!'
                ]);

                $this->resetForm();
                return redirect()->route('vacancy-sections');
            },3);
            
        } catch (\Exception $e) {
            Log::error('Error al guardar vacante: '.$e->getMessage());

            $this->dispatch('show-toast', [
                'type' => 'error',
                'message' => 'Ocurrió un error inesperado al guardar la vacante.'
            ]);
        }
       
    }

     public function update(){

          $this->validate([
            'title' => 'required|string|max:255',
            'summary' => 'required|string|max:2000',

            'main_responsibilities' => 'required|array|min:1',
            'main_responsibilities.*' => 'required|string|max:255',

            'academic_requirements' => 'required|array|min:1',
            'academic_requirements.*' => 'required|string|max:255',

            'experience_requirements' => 'required|array|min:1',
            'experience_requirements.*' => 'required|string|max:255',

            'skills' => 'required|array|min:1',
            'skills.*' => 'required|string|max:255',

            'benefits' => 'required|array|min:1',
            'benefits.*' => 'required|string|max:255',

            'status' => 'required|in:draft,active,inactive,closed',
        ]);


        try {

            if (!$this->editVacancy) {
                throw new \Exception('No se ha seleccionado ningúna vacante para editar.');
            }

            DB::transaction(function () {

                $vacancy = $this->editVacancy;
                $vacancy->fill([
                    'title' => $this->title,
                    'summary' => $this->summary,
                    'main_responsibilities' => $this->main_responsibilities,
                    'academic_requirements' => $this->academic_requirements,
                    'experience_requirements' => $this->experience_requirements,
                    'skills' => $this->skills,
                    'benefits' => $this->benefits,
                    'status' => $this->status,
                    'user_id' => auth()->user()->id,
                    'published_at' => $this->status === 'active' ? now() : null ,
                ])->save();
               
                $this->dispatch('show-toast', [
                    'type' => 'success',
                    'message' => 'Vacante actualizada exitosamente!'
                ]);

                $this->resetForm();
                return redirect()->route('vacancy-sections');
            },3);
            
        } catch (\Exception $e) {
            Log::error('Error al actualizar vacante: '.$e->getMessage());

            $this->dispatch('show-toast', [
                'type' => 'error',
                'message' => 'Ocurrió un error inesperado al guardar la vacante.'
            ]);
        }
     
    }

    public function addItem($field)
    {
        if (!is_array($this->$field)) {
            $this->$field = [];
        }

        $items = $this->$field;

        // revisar último item
        $lastItem = end($items);

        if ($lastItem === null || trim($lastItem) === '') {

            $this->dispatch('show-toast', [
                'type' => 'warning',
                'message' => 'Debe completar el campo antes de agregar otro.'
            ]);

            return;
        }

        $this->{$field}[] = '';
    }

    public function removeItem($field, $index)
    {
        unset($this->$field[$index]);
        $this->$field = array_values($this->$field);
    }
 

    public function render()
    {
        return view('livewire.admin.manage-site.vacancy-forms');
    }
}
