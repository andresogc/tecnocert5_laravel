<?php

namespace App\Livewire\Admin\ManageSite;

use App\Models\Vacancy;
use Livewire\Component;
use Livewire\WithPagination;

class VacancySections extends Component
{   
    use WithPagination;
    protected $paginationTheme = 'tailwind'; 
    protected $listeners = ['deleteConfirmed' => 'delete'];

    public $deleteVacancy = null; //toma el valod de id de la vacante a eliminar    


     public function create()
    {   
        return redirect()->route('vacancy-sections.create');
    }

     public function edit($id)
    {   
        return redirect()->route('vacancy-sections.edit', ['vacancy' => $id]);
    }

    
    public function confirmDelete($id)
    {   
        $this->deleteVacancy = $id;

        // Dispara un evento JS que abre el Swal de confirmación
        $this->dispatch('confirm-delete');
    }


    public function delete()
    {   
        Vacancy::find($this->deleteVacancy)?->delete();
        $this->deleteVacancy = null;

        // Mensaje de éxito que captará <x-alert />
        $this->dispatch('show-toast', [
            'type' => 'success',
            'message' => '¡Vacante eliminada exitosamente!'
        ]);
    }


    public function render()
    {   
        $vacancies = Vacancy::orderBy('created_at','DESC')->paginate(5);

        return view('livewire.admin.manage-site.vacancy-sections',compact('vacancies'));
    }
}
