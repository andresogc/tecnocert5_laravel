<?php

namespace App\Livewire\Admin\ManageSite;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostSections extends Component
{   
    use WithPagination;

    protected $paginationTheme = 'tailwind'; 


     // Modo crear
    public function create()
    {   
        
        return redirect()->route('post-sections.create');
        
        
    }

    public function edit($id)
    {   
        
        return redirect()->route('post-sections.edit', ['post' => $id]);
        
        
    }


    public function render()
    {   

        $posts = Post::orderBy('created_at','DESC')->paginate(5);
        
        return view('livewire.admin.manage-site.post-sections', compact('posts'));
    }
}
