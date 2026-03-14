<?php

namespace App\Livewire\Admin\ManageSite;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostSections extends Component
{   
    use WithPagination;

    protected $paginationTheme = 'tailwind'; 
    protected $listeners = ['deleteConfirmed' => 'delete'];

    public $deletePost = null;//toma el valod de id de la publicación a eliminar


     // Modo crear
    public function create()
    {   
        return redirect()->route('post-sections.create');
    }

    public function edit($id)
    {   
        return redirect()->route('post-sections.edit', ['post' => $id]);
    }


    public function confirmDelete($id)
    {   
        $this->deletePost = $id;

        // Dispara un evento JS que abre el Swal de confirmación
        $this->dispatch('confirm-delete');
    }


    public function delete()
    {   
        Post::find($this->deletePost)?->delete();
        $this->deletePost = null;

        // Mensaje de éxito que captará <x-alert />
        $this->dispatch('show-toast', [
            'type' => 'success',
            'message' => '¡Publicación eliminada exitosamente!'
        ]);
    }


    public function render()
    {   

        $posts = Post::orderBy('created_at','DESC')->paginate(5);
        
        return view('livewire.admin.manage-site.post-sections', compact('posts'));
    }
}
