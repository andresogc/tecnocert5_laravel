<?php

namespace App\Livewire\Admin\Managesite;

use App\Models\Media;
use App\Models\PageSection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;


class LegalSections extends Component
{   
    use WithFileUploads;
    public $title,$content,$id;
    public $currentSection;
    
    public $currentMediaUrl = null;
    public $currentMediaType = null;


    public function mount(PageSection $pageSection)
    {
        $this->title = $pageSection->title ?? '';
        $this->content = $pageSection->content['paragraphs'][0] ?? '';
        $this->id=$pageSection->id;
        $this->currentSection = PageSection::where('id', $this->id)->firstOrFail();
        

        $this->dispatch('loadEditorContent', $this->content);

    }


    public function update(){
        
        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);  

        try {

            DB::transaction(function () {
                

                $content = $this->currentSection->content;
                $content['paragraphs'][0] = $this->content;

                $this->currentSection->update([
                    'title' => $this->title,
                    'content' => $content,
                ]);

                $this->dispatch('show-toast', [
                    'type' => 'success',
                    'message' => 'Datos actualizados exitosamente!'
                ]);
            },3);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    
    public function render()
    {
        return view('livewire.admin.manage-site.legal-sections');
    }
}
