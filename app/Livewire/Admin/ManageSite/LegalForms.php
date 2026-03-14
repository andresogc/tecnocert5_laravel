<?php

namespace App\Livewire\Admin\ManageSite;

use App\Models\Legal;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class LegalForms extends Component
{   
    use WithFileUploads;

    public $name,$slug ,$file_path,$file_name,$updated_by,$file ;

    public $isEditMode = false;
    public $editLegal;

    public function mount($legal = null)
    {   

        if ($legal) {
            $this->isEditMode = true;
            $this->editLegal = Legal::findOrFail($legal);

            // Cargar datos de vacante
            $this->name = $this->editLegal->name;
            $this->slug = $this->editLegal->slug;
            $this->file_path = $this->editLegal->file_path;
            $this->file_name = $this->editLegal->file_name;
            $this->updated_by = $this->editLegal->updated_by;
            

        } else {
            
            $this->isEditMode = false;
            $this->resetForm();
        }
    }

     public function resetForm(){
        $this->name = '';
        $this->slug = '';
        $this->file_path = '';
        $this->file_name = '';
        $this->updated_by = '';
        $this->file=null;
      
    }

    public function update()
    {
        // 1. Validación
        $this->validate([
            'name' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx|max:2048',
        ]);

        try {

            // 2. Verificar que exista el documento
            if (!$this->editLegal) {
                throw new \Exception('No se ha seleccionado ningún documento.');
            }

            DB::transaction(function () {

                $legal = $this->editLegal;

                // 3. Mantener archivo actual
                $filePath = $legal->file_path;
                $fileName = $legal->file_name;

                // 4. Si se sube un archivo nuevo
                if ($this->file) {

                    // eliminar archivo anterior
                    if ($legal->file_path && Storage::disk('public')->exists($legal->file_path)) {
                        Storage::disk('public')->delete($legal->file_path);
                    }

                    // generar nombre limpio
                    $cleanName = Str::slug($this->name) . '_' . time() . '.' . $this->file->extension();

                    // guardar archivo
                    $filePath = $this->file->storeAs(
                        'legals',
                        $cleanName,
                        'public'
                    );

                    $fileName = $cleanName;
                }

                // 5. Actualizar base de datos
                $legal->update([
                    'name' => $this->name,
                    'slug' => Str::slug($this->name),
                    'file_path' => $filePath,
                    'file_name' => $fileName,
                    'updated_by' => auth()->id(),
                ]);

            });

            // 6. Notificación
            $this->dispatch('show-toast', [
                'type' => 'success',
                'message' => 'Documento actualizado exitosamente!'
            ]);

            // 7. limpiar formulario
            $this->resetForm();

            // 8. redirigir
            return redirect()->route('legal-sections');

        } catch (\Exception $e) {

            Log::error('Error al actualizar documento: '.$e->getMessage());

            $this->dispatch('show-toast', [
                'type' => 'error',
                'message' => 'Ocurrió un error inesperado al actualizar el documento.'
            ]);
        }
    }


    public function render()
    {
        return view('livewire.admin.manage-site.legal-forms');
    }
}
