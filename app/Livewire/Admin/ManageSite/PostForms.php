<?php

namespace App\Livewire\Admin\ManageSite;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class PostForms extends Component
{   

     use WithFileUploads;

    public $title, $excerpt, $content, $status; 
    public $isEditMode = false;
    public $editPost;
    //
    public $media;
    public $currentMediaType;
    public $currentMediaUrl;
    //
    public array $statusOptions = [
        ['id' => 'draft', 'name' => 'Borrador'],
        ['id' => 'published', 'name' => 'Publicar'],
    ];


    public function mount($post = null)
    {   
        if ($post) {
            $this->isEditMode = true;
            $this->editPost = Post::with('media')->findOrFail($post);

            // Cargar datos del post
            $this->title = $this->editPost->title;
            $this->excerpt = $this->editPost->excerpt;
            $this->content = $this->editPost->content;
            $this->status = $this->editPost->status;

            // Si tiene imagen actual
            $media = $this->editPost->media()->where('role', 'thumbnail')->first();
            if ($media) {
                $this->currentMediaType = $media->type;
                $this->currentMediaUrl = $media->url;
            }

            $this->dispatch('loadEditorContent', $this->content);

        } else {
            $this->isEditMode = false;
            $this->resetForm();
        }
    }




     public function resetForm(){
        $this->title = '';
        $this->excerpt = '';
        $this->content = '';
        $this->status = '';
       
    }


    public function store(){

        $this->editPost = null; // por seguridad
        $this->validate([
            'title' => 'required|string|max:1500',
            'excerpt' => 'required|string|max:1000',
            'content' => 'nullable|string',
            'status' => 'required|string|max:255',
            'media' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                    function ($attribute, $value, $fail) {
                        if (!$value) return;

                        $mime = $value->getMimeType();

                        if (str_starts_with($mime, 'image/')) {
                            if ($value->getSize() > 2 * 1024 * 1024) { // 2 MB
                                $fail('La imagen no debe superar los 2 MB.');
                            }
                        }else {
                            $fail('El archivo debe ser una imagen válida.');
                        }
                    },
                ],
        ]);  

        try {

            DB::transaction(function () {

                $slug = Str::slug($this->title);

                // Evitar duplicados agregando un número si ya existe el mismo slug
                $count = Post::where('slug', 'like', "{$slug}%")->count();
                if ($count > 0) {
                    $slug .= '-' . ($count + 1);
                }

                $post = Post::create([
                    'title' => $this->title,
                    'slug' => $slug,
                    'excerpt' => $this->excerpt,
                    'content' => $this->content,
                    'status' => $this->status,
                    'author_id' => auth()->user()->id,
                    'published_at' => $this->status === 'published' ? now() : null ,
                    
                ]);

                if ($this->media) {
                    $type =  'image';

                    // Guarda en: storage/app/public/page_sections/hero/
                    $path = $this->media->store("post/{$post->slug}", 'public');

                    // Registrar nuevo archivo (con relación polimórfica)
                    $post->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path), // Devuelve /storage/...
                        'alt_text' => $type === 'image' ? $this->title : null,
                        'order' => 0,
                        'role' => 'thumbnail',
                    ]);
                }

                $this->dispatch('show-toast', [
                    'type' => 'success',
                    'message' => 'Blog creado exitosamente!'
                ]);

                $this->resetForm();
                return redirect()->route('post-sections');
            },3);
            
        } catch (\Exception $e) {
            Log::error('Error al guardar cliente: '.$e->getMessage());

            $this->dispatch('show-toast', [
                'type' => 'error',
                'message' => 'Ocurrió un error inesperado al guardar el blog.'
            ]);
        }
     
    }


    public function update(){

        $this->validate([
            'title' => 'required|string|max:1500',
            'excerpt' => 'required|string|max:1000',
            'content' => 'required|string',
            'status' => 'required|string|max:255',
            'media' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                    function ($attribute, $value, $fail) {
                        if (!$value) return;

                        $mime = $value->getMimeType();

                        if (str_starts_with($mime, 'image/')) {
                            if ($value->getSize() > 2 * 1024 * 1024) { // 2 MB
                                $fail('La imagen no debe superar los 2 MB.');
                            }
                        }else {
                            $fail('El archivo debe ser una imagen válida.');
                        }
                    },
                ],
        ]);  

        try {

            if (!$this->editPost) {
                throw new \Exception('No se ha seleccionado ningún post para editar.');
            }

            DB::transaction(function () {

                $post = $this->editPost;

                // 👇 Solo regenerar el slug si cambió el título
                if ($post->title !== $this->title) {
                    $slug = Str::slug($this->title);

                    // Evitar duplicados
                    $count = Post::where('slug', 'like', "{$slug}%")
                        ->where('id', '!=', $post->id)
                        ->count();

                    if ($count > 0) {
                        $slug .= '-' . ($count + 1);
                    }

                    $post->slug = $slug;
                }

                $post->fill([
                    'title' => $this->title,
                    'excerpt' => $this->excerpt,
                    'content' => $this->content,
                    'status' => $this->status,
                    'author_id' => auth()->user()->id,
                    'published_at' => $this->status === 'published'
                        ? ($post->published_at ?? now())
                        : null,
                ])->save();

                if ($this->media) {
                    $type = 'image';

                    // Guarda en: storage/app/public/page_sections/hero/
                    $path = $this->media->store("post/{$post->id}", 'public');

                    $existingMedia = $post->media()
                        ->where('role', 'thumbnail')
                        ->where('type', $type)
                        ->first();

                    if ($existingMedia) {
                        // 🗑️ 1. Eliminar archivo físico anterior
                        $oldPath = str_replace('/storage/', 'public/', $existingMedia->url);
                        if (Storage::exists($oldPath)) {
                            Storage::delete($oldPath);
                        }

                        // 🔄 2. Actualizar registro con la nueva ruta
                        $existingMedia->update([
                            'url' => Storage::url($path),
                            'alt_text' => $this->title,
                        ]);
                    } else {
                        // 🆕 3. Crear nuevo registro si no existía
                        $post->media()->create([
                            'type' => $type,
                            'url' => Storage::url($path),
                            'alt_text' => $this->title,
                            'order' => 0,
                            'role' => 'thumbnail',
                        ]);
                    }

                }


                $this->dispatch('show-toast', [
                    'type' => 'success',
                    'message' => 'Blog actualizado exitosamente!'
                ]);

                $this->resetForm();
                return redirect()->route('post-sections');
            },3);
            
        } catch (\Exception $e) {
            Log::error('Error al guardar cliente: '.$e->getMessage());

            $this->dispatch('show-toast', [
                'type' => 'error',
                'message' => 'Ocurrió un error inesperado al guardar el blog.'
            ]);
        }
     
    }

    public function render()
    {
        return view('livewire.admin.manage-site.post-forms');
    }
}
