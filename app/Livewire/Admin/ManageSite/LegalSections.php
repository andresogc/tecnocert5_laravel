<?php

namespace App\Livewire\Admin\Managesite;


use App\Models\Legal;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class LegalSections extends Component
{   
    use WithFileUploads, WithPagination;

    protected $paginationTheme = 'tailwind'; 
    protected $listeners = ['deleteConfirmed' => 'delete'];

    public $name,$slug ,$file_path,$file_name,$updated_by ;

     public $deleteLegal = null;

    public function create()
    {   
        return redirect()->route('legal-sections.create');
    }

    public function edit($id)
    {   
        return redirect()->route('legal-sections.edit', ['legal' => $id]);
    }

    
    public function confirmDelete($id)
    {   
        $this->deleteLegal = $id;

        // Dispara un evento JS que abre el Swal de confirmación
        $this->dispatch('confirm-delete');
    }


    public function delete()
    {   
        Legal::find($this->deleteLegal)?->delete();
        $this->deleteLegal = null;

        // Mensaje de éxito que captará <x-alert />
        $this->dispatch('show-toast', [
            'type' => 'success',
            'message' => 'Documento eliminado exitosamente!'
        ]);
    }
    
    public function render()
    {   
        $legals = Legal::orderBy('created_at','DESC')->paginate(5);
        return view('livewire.admin.manage-site.legal-sections',compact('legals'));
    }
}
