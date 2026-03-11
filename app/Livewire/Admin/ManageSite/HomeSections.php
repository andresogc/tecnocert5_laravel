<?php

namespace App\Livewire\Admin\ManageSite;

use App\Models\Media;
use App\Models\PageSection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;


class HomeSections extends Component
{   
    use WithFileUploads;

    public $title = '';

    public $pageSection = null;

    protected $messages = [
        'heroContent.paragraph.required' => 'El párrafo es obligatorio.',
        'heroContent.title.required' => 'El título es obligatorio.',
        'heroContent.button1_text.required' => 'El texto del botón 1 es obligatorio.',
        'heroContent.button2_text.required' => 'El texto del botón 2 es obligatorio.',
        'videoContent.media.required' => 'Debes seleccionar un archivo para subir.',
        'videoContent.media.mimetypes' => 'El archivo debe ser un video válido.',
        'videoContent.media.max' => 'El archivo no debe superar los 40 MB.',
        'aboutContent.subtitle.required' => 'El título es obligatorio.',
        'aboutContent.paragraph.required' => 'El párrafo es obligatorio.',
        'aboutContent.column1Title.required' => 'El título es obligatorio.',
        'aboutContent.column1Paragraph.required' => 'El párrafo es obligatorio.',
        'aboutContent.column2Title.required' => 'El título es obligatorio.',
        'aboutContent.column2Paragraph.required' => 'El párrafo es obligatorio.',
        'aboutContent.column3Title.required' => 'El título es obligatorio.',
        'aboutContent.column3Paragraph.required' => 'El párrafo es obligatorio.',
    ];


    public $heroContent = [
        'paragraph1' => '',
        'paragraph2' => '',
        'button1_text' => '',
        'button1_url' => '',
        'button2_text' => '',
        'button2_url' => '',
        'social_link_linkedin' => '',
        'social_link_instagram' => '',
        'social_link_contact' => '',
        'media'=>null,
        'currentMediaUrl' => null,
        'currentMediaType' => null,
    ];

    public $videoContent = [
        'currentMediaUrl' => null,
        'currentMediaType' => null,
        'media'=>null,
    ];

    public $aboutContent = [
        'subtitle' => '',
        'paragraph' => '',
        'column1Title' => '',
        'column1Paragraph' => '',
        'column1IconUrl' => '',
        'column2Title' => '',
        'column2Paragraph' => '',
        'column2IconUrl' => '',
        'column3Title' => '',
        'column3Paragraph' => '',
        'column3IconUrl' => '',
        'media1'=>null,
        'media2'=>null,
        'media3'=>null,
    ];

    public $servicesContent = [
        'subtitle' => '',
        'paragraph1' => '',
        'paragraph2' => '',
        'column1Title' => '',
        'column1Paragraph' => '',
        'column1IconUrl' => '',
        'column2Title' => '',
        'column2Paragraph' => '',
        'column2IconUrl' => '',
        'column3Title' => '',
        'column3Paragraph' => '',
        'column3IconUrl' => '',
        'column4Title' => '',
        'column4Paragraph' => '',
        'column4IconUrl' => '',
        'media1'=>null,
        'media2'=>null,
        'media3'=>null,
        'media4'=>null,
    ];

    public $clientsContent = [
        'subtitle' => '',
        'subtitle2' => '',
        'paragraph' => '',
        'img1Url' => '',
        'img2Url' => '',
        'img3Url' => '',
        'img4Url' => '',
        'img5Url' => '',
        'img6Url' => '',
        'media1'=>null,
        'media2'=>null,
        'media3'=>null,
        'media4'=>null,
        'media5'=>null,
        'media6'=>null,
    ];

    public $worksContent = [
        'paragraph' => '',
        'buttonText' => '',
        'img1Url' => '',
        'img2Url' => '',
        'img3Url' => '',
        'img4Url' => '',
        'img5Url' => '',
        'img6Url' => '',
        'media1'=>null,
        'media2'=>null,
        'media3'=>null,
        'media4'=>null,
        'media5'=>null,
        'media6'=>null,
    ];

    public $clients2Content = [
        'subtitle' => '',
        'subtitle2' => '',
        'quetions' => [],
        
    ];

    public $contactContent = [
        'subtitle' => '',
        'subtitle2' => '',
        'contactInfoTitle'=>'',
        'contactInfoPlaceTitle'=>'',
        'contactInfoPlaceCities'=>'',
        'contactInfoEmailTitle'=>'',
        'contactInfoEmailEmails'=>'',
        'contactInfoPhoneTitle'=>'',
        'contactInfoPhonePhones'=>'',
    ];

    

    public function mount(PageSection $pageSection)
    {
        
        $this->title = $pageSection->title ?? '';

        if($pageSection->name == 'hero' ){
            /* cargar datos de index primera seccion (hero) */
            $this->loadHero($pageSection);
            $this->pageSection = 'home-sections-hero';
        }else if($pageSection->name == 'video'){
            /* cargar datos de segunda seccion video */
            $this->loadVideo($pageSection);
            $this->pageSection = 'home-sections-video';
        }else if($pageSection->name == 'about'){
            $this->loadAbout($pageSection);
            $this->pageSection = 'home-sections-about';
        }else if($pageSection->name == 'services'){
            $this->loadServices($pageSection);
            $this->pageSection = 'home-sections-services';
        }else if($pageSection->name == 'clients'){
            $this->loadClients($pageSection);
            $this->pageSection = 'home-sections-clients';
        }else if($pageSection->name == 'works'){
            $this->loadWorks($pageSection);
            $this->pageSection = 'home-sections-works';
        }else if($pageSection->name == 'clients2'){
            $this->loadClients2($pageSection);
            $this->pageSection = 'home-sections-clients2';
        }else if($pageSection->name == 'contact'){
            $this->loadContact($pageSection);
            $this->pageSection = 'home-sections-contact';
        }

        
          
        

    }


    public function update()
    {  
        if($this->pageSection == 'home-sections-hero' ){
            $this->updateHero();
        }else if($this->pageSection == 'home-sections-video'){
            $this->updateVideo();
        }else if($this->pageSection == 'home-sections-about'){
            $this->updateAbout();
        }else if($this->pageSection == 'home-sections-services'){
            $this->updateServices();
        }else if($this->pageSection == 'home-sections-clients'){
            $this->updateClients();
        }else if($this->pageSection == 'home-sections-works'){
            $this->updateWorks();
        }else if($this->pageSection == 'home-sections-clients2'){
            $this->updateClients2();
        }else if($this->pageSection == 'home-sections-contact'){
            $this->updateContact();
        }

    }

    public function updateHero(){
        
         $this->validate([
                'heroContent.paragraph1' => [
                    'required',
                    'string',
                    'max:1500',
                    function ($attribute, $value, $fail) {
                        // Eliminar etiquetas HTML
                        $clean = trim(strip_tags($value));

                        // Si está vacío → Quill está vacío
                        if ($clean === '') {
                            $fail('El párrafo no puede estar vacío.');
                        }
                    }
                ],
                'heroContent.paragraph2' => [
                    'nullable',
                    'string',
                    'max:1500',
                    function ($attribute, $value, $fail) {
                        // Eliminar etiquetas HTML
                        $clean = trim(strip_tags($value));

                        // Si está vacío → Quill está vacío
                        if ($clean === '') {
                            $fail('El párrafo no puede estar vacío.');
                        }
                    }
                ],

                'title' => 'required|string|max:255',
                'heroContent.button1_text' => 'required|string|max:255',
                'heroContent.button1_url' => 'nullable|string',
                'heroContent.button2_text' => 'required|string|max:255',
                'heroContent.button2_url' => 'nullable|string',
                'heroContent.social_link_linkedin' => 'nullable|url',
                'heroContent.social_link_instagram' => 'nullable|url',
                'heroContent.social_link_contact' => 'nullable|string',
                /* 'media' => [
                    'nullable',
                    'image',
                    'mimes:jpeg,png,webp',
                    'max:4096', // 2MB reales
                ], */
                'heroContent.media' => [
                    'nullable',
                    'file',
                    'mimetypes:image/jpeg,image/png,image/webp',
                    function ($attribute, $value, $fail) {
                        if (!$value) return;

                        $mime = $value->getMimeType();
                    
                        if (str_starts_with($mime, 'image/')) {
                            if ($value->getSize() > 4 * 1024 * 1024) { // 2 MB
                                $fail('La imagen no debe superar los 4 MB.');
                            }
                        } elseif (str_starts_with($mime, 'video/')) {
                            if ($value->getSize() > 40 * 1024 * 1024) { // 40 MB
                                $fail('El video no debe superar los 40 MB.');
                            }
                        } else {
                            $fail('El archivo debe ser una imagen o un video válido.');
                        }
                    },
                ],

        ]);
        
        try {

            DB::transaction(function () {
                // Buscar la sección "hero"
                $section = PageSection::where('name', 'hero')->firstOrFail();
               
                $content = [
                    'subtitle' => '',
                    'paragraphs' => [$this->heroContent['paragraph1'],$this->heroContent['paragraph2']],
                    'buttons' => [
                        ['text' => $this->heroContent['button1_text'], 'link' => $this->heroContent['button1_url']],
                        ['text' => $this->heroContent['button2_text'], 'link' => $this->heroContent['button2_url']],
                    ],
                    'social' => [
                        ['icon' => 'fa-linkedin', 'link' => $this->heroContent['social_link_linkedin']],
                        ['icon' => 'fa-instagram', 'link' => $this->heroContent['social_link_instagram']],
                        ['icon' => 'fa-user', 'link' => $this->heroContent['social_link_contact']],
                    ],
                ];

                $section->update([
                    'title' => $this->title,
                    'content' => $content,
                    'order' => 1
                ]);

                // Guardar el archivo
                if ($this->heroContent['media']) {
                    $mime = $this->heroContent['media']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    // Guarda en: storage/app/public/page_sections/hero/
                    $path = $this->heroContent['media']->store("page_sections/{$section->name}", 'public');

                    // Elimina medios anteriores del mismo tipo (si quieres reemplazar)
                    $section->media()
                        ->where('role', 'background')
                        /* ->where('type', $type) */
                        ->delete();

                    // Registrar nuevo archivo (con relación polimórfica)
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path), // Devuelve /storage/...
                        'alt_text' => $type === 'image' ? $this->heroContent['title'] : null,
                        'order' => 0,
                        'role' => 'background',
                    ]);

                    $this->heroContent['currentMediaUrl'] = Storage::url($path);
                    $this->heroContent['currentMediaType'] = $type;
                }

                
                $this->dispatch('show-toast', [
                    'type' => 'success',
                    'message' => 'Datos actualizados exitosamente!'
                ]);
            },3);
        } catch (\Throwable $th) {
            
            throw $th;
        }
    }

    public function updateVideo()
    {
        $this->validate([
            'videoContent.media' => [
                'required',
                'file',
                'mimetypes:video/mp4,video/quicktime',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen o video válido.');
                    }
                },
            ],
        ]);

        try {

            DB::transaction(function () {

                $section = PageSection::where('name', 'video')->firstOrFail();

                if ($this->videoContent['media']) {

                    $mime = $this->videoContent['media']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->videoContent['media']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'background')->get();

                    foreach ($oldMedia as $media) {
                        // Borrar archivo físico
                        if ($media->url) {
                            $realPath = str_replace('/storage/', '', $media->url);
                            Storage::disk('public')->delete($realPath);
                        }

                        // Borrar registro
                        $media->delete();
                    }

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 0,
                        'role' => 'background',
                    ]);

                    $this->videoContent['currentMediaUrl'] = Storage::url($path);
                    $this->videoContent['currentMediaType'] = $type;
                }

                $this->dispatch('show-toast', [
                    'type' => 'success',
                    'message' => 'Datos actualizados exitosamente!'
                ]);

            }, 3);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function updateAbout()
    {  
        $this->validate([
            'title' => 'required|string|max:255',
            'aboutContent.subtitle' => 'required|string|max:255',
            'aboutContent.paragraph' => [
                    'required',
                    'string',
                    'max:1500',
                    function ($attribute, $value, $fail) {
                        // Eliminar etiquetas HTML
                        $clean = trim(strip_tags($value));

                        // Si está vacío → Quill está vacío
                        if ($clean === '') {
                            $fail('El párrafo no puede estar vacío.');
                        }
                    }
                ],
            'aboutContent.column1Title' => 'required|string|max:255',
            'aboutContent.column1Paragraph' => [
                    'required',
                    'string',
                    'max:1500',
                    function ($attribute, $value, $fail) {
                        // Eliminar etiquetas HTML
                        $clean = trim(strip_tags($value));

                        // Si está vacío → Quill está vacío
                        if ($clean === '') {
                            $fail('El párrafo no puede estar vacío.');
                        }
                    }
            ],
            
            'aboutContent.column2Title' => 'required|string|max:255',
            'aboutContent.column2Paragraph' => [
                    'required',
                    'string',
                    'max:1500',
                    function ($attribute, $value, $fail) {
                        // Eliminar etiquetas HTML
                        $clean = trim(strip_tags($value));

                        // Si está vacío → Quill está vacío
                        if ($clean === '') {
                            $fail('El párrafo no puede estar vacío.');
                        }
                    }
            ],
            
            'aboutContent.column3Title' => 'required|string|max:255',
            'aboutContent.column3Paragraph' => [
                    'required',
                    'string',
                    'max:1500',
                    function ($attribute, $value, $fail) {
                        // Eliminar etiquetas HTML
                        $clean = trim(strip_tags($value));

                        // Si está vacío → Quill está vacío
                        if ($clean === '') {
                            $fail('El párrafo no puede estar vacío.');
                        }
                    }
            ],

            'aboutContent.media1' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen válida.');
                    }
                },
            ],
            'aboutContent.media2' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen válida.');
                    }
                },
            ],
            'aboutContent.media3' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen o video válido.');
                    }
                },
            ],
        ]);
        
        try {

            DB::transaction(function () {

                $section = PageSection::where('name', 'about')->firstOrFail();

                $content = [
                    'subtitle' => $this->aboutContent['subtitle'],
                    'paragraphs' => [$this->aboutContent['paragraph']],
                    'columns'=>[
                        ['title' => $this->aboutContent['column1Title'], 'paragraph' => $this->aboutContent['column1Paragraph']],
                        ['title' => $this->aboutContent['column2Title'], 'paragraph' => $this->aboutContent['column2Paragraph']],
                        ['title' => $this->aboutContent['column3Title'], 'paragraph' => $this->aboutContent['column3Paragraph']],
                    ]
                ];

                $section->update([
                    'title' => $this->title,
                    'content' => $content,
                    'order' => 3  
                ]);



                if ($this->aboutContent['media1']) {

                    $mime = $this->aboutContent['media1']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->aboutContent['media1']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'icon')->where('order',1)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 1,
                        'role' => 'icon',
                    ]);

                    $this->aboutContent['column1IconUrl'] = Storage::url($path);
                    
                }
                if ($this->aboutContent['media2']) {

                    $mime = $this->aboutContent['media2']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->aboutContent['media2']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'icon')->where('order',2)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 2,
                        'role' => 'icon',
                    ]);

                   $this->aboutContent['column2IconUrl'] = Storage::url($path);
                }
                if ($this->aboutContent['media3']) {

                    $mime = $this->aboutContent['media3']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->aboutContent['media3']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'icon')->where('order',3)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 3,
                        'role' => 'icon',
                    ]);

                   $this->aboutContent['column3IconUrl'] = Storage::url($path);
                }
               
                $this->dispatch('show-toast', [
                    'type' => 'success',
                    'message' => 'Datos actualizados exitosamente!'
                ]);
                

            }, 3);

        } catch (\Throwable $th) {
            
            throw $th;
        }
    }

    public function updateServices()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'servicesContent.subtitle' => 'required|string|max:255',
            'servicesContent.paragraph1' => [
                    'required',
                    'string',
                    'max:1500',
                    function ($attribute, $value, $fail) {
                        // Eliminar etiquetas HTML
                        $clean = trim(strip_tags($value));

                        // Si está vacío → Quill está vacío
                        if ($clean === '') {
                            $fail('El párrafo no puede estar vacío.');
                        }
                    }
            ],
            'servicesContent.paragraph2' => [
                    'required',
                    'string',
                    'max:1500',
                    function ($attribute, $value, $fail) {
                        // Eliminar etiquetas HTML
                        $clean = trim(strip_tags($value));

                        // Si está vacío → Quill está vacío
                        if ($clean === '') {
                            $fail('El párrafo no puede estar vacío.');
                        }
                    }
            ],
            'servicesContent.column1Title' => 'required|string|max:255',
            'servicesContent.column1Paragraph' => [
                    'required',
                    'string',
                    'max:1500',
                    function ($attribute, $value, $fail) {
                        // Eliminar etiquetas HTML
                        $clean = trim(strip_tags($value));

                        // Si está vacío → Quill está vacío
                        if ($clean === '') {
                            $fail('El párrafo no puede estar vacío.');
                        }
                    }
            ],
            
            'servicesContent.column2Title' => 'required|string|max:255',
            'servicesContent.column2Paragraph' => [
                    'required',
                    'string',
                    'max:1500',
                    function ($attribute, $value, $fail) {
                        // Eliminar etiquetas HTML
                        $clean = trim(strip_tags($value));

                        // Si está vacío → Quill está vacío
                        if ($clean === '') {
                            $fail('El párrafo no puede estar vacío.');
                        }
                    }
            ],
            
            'servicesContent.column3Title' => 'required|string|max:255',
            'servicesContent.column3Paragraph' => [
                    'required',
                    'string',
                    'max:1500',
                    function ($attribute, $value, $fail) {
                        // Eliminar etiquetas HTML
                        $clean = trim(strip_tags($value));

                        // Si está vacío → Quill está vacío
                        if ($clean === '') {
                            $fail('El párrafo no puede estar vacío.');
                        }
                    }
            ],
            'servicesContent.column4Title' => 'required|string|max:255',
            'servicesContent.column4Paragraph' => [
                    'required',
                    'string',
                    'max:1500',
                    function ($attribute, $value, $fail) {
                        // Eliminar etiquetas HTML
                        $clean = trim(strip_tags($value));

                        // Si está vacío → Quill está vacío
                        if ($clean === '') {
                            $fail('El párrafo no puede estar vacío.');
                        }
                    }
            ],

            'servicesContent.media1' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen válida.');
                    }
                },
            ],
            'servicesContent.media2' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen válida.');
                    }
                },
            ],
            'servicesContent.media3' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen o video válida.');
                    }
                },
            ],
            'servicesContent.media4' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen válida.');
                    }
                },
            ],
        ]);

        try {

            DB::transaction(function () {

                $section = PageSection::where('name', 'services')->firstOrFail();

                $content = [
                    'subtitle' => $this->servicesContent['subtitle'],
                    'paragraphs' => [$this->servicesContent['paragraph1'],$this->servicesContent['paragraph2']],
                    'columns'=>[
                        ['title' => $this->servicesContent['column1Title'], 'paragraph' => $this->servicesContent['column1Paragraph']],
                        ['title' => $this->servicesContent['column2Title'], 'paragraph' => $this->servicesContent['column2Paragraph']],
                        ['title' => $this->servicesContent['column3Title'], 'paragraph' => $this->servicesContent['column3Paragraph']],
                        ['title' => $this->servicesContent['column4Title'], 'paragraph' => $this->servicesContent['column4Paragraph']],
                    ]
                ];

                $section->update([
                    'title' => $this->title,
                    'content' => $content,
                    'order' => 4  
                ]);



                if ($this->servicesContent['media1']) {

                    $mime = $this->servicesContent['media1']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->servicesContent['media1']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'icon')->where('order',1)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 1,
                        'role' => 'icon',
                    ]);

                    $this->servicesContent['column1IconUrl'] = Storage::url($path);
                    
                }
                if ($this->servicesContent['media2']) {

                    $mime = $this->servicesContent['media2']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->servicesContent['media2']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'icon')->where('order',2)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 2,
                        'role' => 'icon',
                    ]);

                   $this->servicesContent['column2IconUrl'] = Storage::url($path);
                }

                if ($this->servicesContent['media3']) {

                    $mime = $this->videoContent['media3']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->videoContent['media3']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'icon')->where('order',3)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 3,
                        'role' => 'icon',
                    ]);

                   $this->servicesContent['column3IconUrl'] = Storage::url($path);
                }

                if ($this->servicesContent['media4']) {

                    $mime = $this->servicesContent['media4']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->servicesContent['media4']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'icon')->where('order',4)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 4,
                        'role' => 'icon',
                    ]);

                   $this->servicesContent['column4IconUrl'] = Storage::url($path);
                }

                $this->dispatch('show-toast', [
                    'type' => 'success',
                    'message' => 'Datos actualizados exitosamente!'
                ]);

            }, 3);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function updateClients()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'clientsContent.subtitle' => 'required|string|max:255',
            'clientsContent.subtitle2' => 'required|string|max:255',
            'clientsContent.paragraph' => [
                    'required',
                    'string',
                    'max:1500',
                    function ($attribute, $value, $fail) {
                        // Eliminar etiquetas HTML
                        $clean = trim(strip_tags($value));

                        // Si está vacío → Quill está vacío
                        if ($clean === '') {
                            $fail('El párrafo no puede estar vacío.');
                        }
                    }
            ],

            'clientsContent.media1' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen válida.');
                    }
                },
            ],
            'clientsContent.media2' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen válida.');
                    }
                },
            ],
            'clientsContent.media3' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen o video válida.');
                    }
                },
            ],
            'clientsContent.media4' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen válida.');
                    }
                },
            ],
            'clientsContent.media5' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen válida.');
                    }
                },
            ],
            'clientsContent.media6' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen válida.');
                    }
                },
            ],
        ]);

        try {

            DB::transaction(function () {

                $section = PageSection::where('name', 'clients')->firstOrFail();

                $content = [
                    'subtitle' => $this->clientsContent['subtitle'],
                    'subtitle2' => $this->clientsContent['subtitle2'],
                    'paragraphs' => [$this->clientsContent['paragraph']],
                    
                ];

                $section->update([
                    'title' => $this->title,
                    'content' => $content,
                    'order' => 5  
                ]);



                if ($this->clientsContent['media1']) {

                    $mime = $this->clientsContent['media1']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->clientsContent['media1']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'thumbnail')->where('order',1)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 1,
                        'role' => 'icon',
                    ]);

                    $this->clientsContent['img1Url'] = Storage::url($path);
                    
                }
                if ($this->clientsContent['media2']) {

                    $mime = $this->clientsContent['media2']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->clientsContent['media2']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'thumbnail')->where('order',2)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 2,
                        'role' => 'icon',
                    ]);

                   $this->clientsContent['img2Url'] = Storage::url($path);
                }

                if ($this->clientsContent['media3']) {

                    $mime = $this->clientsContent['media3']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->clientsContent['media3']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'thumbnail')->where('order',3)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 3,
                        'role' => 'icon',
                    ]);

                   $this->clientsContent['img3Url'] = Storage::url($path);
                }

                if ($this->clientsContent['media4']) {

                    $mime = $this->clientsContent['media4']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->clientsContent['media4']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'thumbnail')->where('order',4)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 4,
                        'role' => 'icon',
                    ]);

                   $this->clientsContent['img4Url'] = Storage::url($path);
                }

                if ($this->clientsContent['media5']) {

                    $mime = $this->clientsContent['media5']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->clientsContent['media5']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'thumbnail')->where('order',4)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 4,
                        'role' => 'icon',
                    ]);

                   $this->clientsContent['img5Url'] = Storage::url($path);
                }

                if ($this->clientsContent['media6']) {

                    $mime = $this->clientsContent['media6']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->clientsContent['media6']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'thumbnail')->where('order',4)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 4,
                        'role' => 'icon',
                    ]);

                   $this->clientsContent['img6Url'] = Storage::url($path);
                }

                $this->dispatch('show-toast', [
                    'type' => 'success',
                    'message' => 'Datos actualizados exitosamente!'
                ]);

            }, 3);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function updateWorks()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'worksContent.paragraph' => [
                    'required',
                    'string',
                    'max:1500',
                    function ($attribute, $value, $fail) {
                        // Eliminar etiquetas HTML
                        $clean = trim(strip_tags($value));

                        // Si está vacío → Quill está vacío
                        if ($clean === '') {
                            $fail('El párrafo no puede estar vacío.');
                        }
                    }
            ],
            'worksContent.buttonText' => 'required|string|max:255',
            'clientsContent.media1' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen válida.');
                    }
                },
            ],
            'clientsContent.media2' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen válida.');
                    }
                },
            ],
            'clientsContent.media3' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen o video válida.');
                    }
                },
            ],
            'clientsContent.media4' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen válida.');
                    }
                },
            ],
            'clientsContent.media5' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen válida.');
                    }
                },
            ],
            'clientsContent.media6' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/png,image/webp',
                function ($attribute, $value, $fail) {
                    if (!$value) return;

                    $mime = $value->getMimeType();

                    if (str_starts_with($mime, 'image/')) {
                        if ($value->getSize() > 4 * 1024 * 1024) {
                            $fail('La imagen no debe superar los 4 MB.');
                        }
                    } elseif (str_starts_with($mime, 'video/')) {
                        if ($value->getSize() > 40 * 1024 * 1024) {
                            $fail('El video no debe superar los 40 MB.');
                        }
                    } else {
                        $fail('El archivo debe ser una imagen válida.');
                    }
                },
            ],
        ]);

        try {

            DB::transaction(function () {

                $section = PageSection::where('name', 'works')->firstOrFail();

                $content = [
                    'paragraphs' => [$this->worksContent['paragraph']],
                    'button'=> ['text' => $this->worksContent['buttonText']],
                     
                ];

                $section->update([
                    'title' => $this->title,
                    'content' => $content,
                    'order' => 6 
                ]);

                if ($this->worksContent['media1']) {

                    $mime = $this->worksContent['media1']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->worksContent['media1']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'thumbnail')->where('order',1)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 1,
                        'role' => 'icon',
                    ]);

                    $this->worksContent['img1Url'] = Storage::url($path);
                    
                }
                if ($this->worksContent['media2']) {

                    $mime = $this->worksContent['media2']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->worksContent['media2']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'thumbnail')->where('order',2)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 2,
                        'role' => 'icon',
                    ]);

                   $this->worksContent['img2Url'] = Storage::url($path);
                }

                if ($this->worksContent['media3']) {

                    $mime = $this->worksContent['media3']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->worksContent['media3']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'thumbnail')->where('order',3)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 3,
                        'role' => 'icon',
                    ]);

                   $this->worksContent['img3Url'] = Storage::url($path);
                }

                if ($this->worksContent['media4']) {

                    $mime = $this->worksContent['media4']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->worksContent['media4']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'thumbnail')->where('order',4)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 4,
                        'role' => 'icon',
                    ]);

                   $this->worksContent['img4Url'] = Storage::url($path);
                }

                if ($this->worksContent['media5']) {

                    $mime = $this->worksContent['media5']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->worksContent['media5']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'thumbnail')->where('order',4)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 4,
                        'role' => 'icon',
                    ]);

                   $this->worksContent['img5Url'] = Storage::url($path);
                }

                if ($this->worksContent['media6']) {

                    $mime = $this->worksContent['media6']->getMimeType();
                    $type = str_starts_with($mime, 'video/') ? 'video' : 'image';

                    $path = $this->worksContent['media6']->store("page_sections/{$section->name}", 'public');

                    // Obtener todos los medios anteriores
                    $oldMedia = $section->media()->where('role', 'thumbnail')->where('order',4)->first();

                    
                    // Borrar archivo físico
                    if ($oldMedia->url) {
                        $realPath = str_replace('/storage/', '', $oldMedia->url);
                        Storage::disk('public')->delete($realPath);
                    }

                    // Borrar registro
                    $oldMedia->delete();
                    

                    // Registrar nuevo archivo
                    $section->media()->create([
                        'type' => $type,
                        'url' => Storage::url($path),
                        'alt_text' => null,
                        'order' => 4,
                        'role' => 'icon',
                    ]);

                   $this->worksContent['img6Url'] = Storage::url($path);
                }


                $this->dispatch('show-toast', [
                    'type' => 'success',
                    'message' => 'Datos actualizados exitosamente!'
                ]);

            }, 3);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function updateClients2()
    {   
        $this->validate([
            'title' => 'required|string|max:255',
            'clients2Content.subtitle' => 'required|string|max:255',
            'clients2Content.subtitle2' => 'required|string|max:255',
            'clients2Content.questions' => 'array',
            'clients2Content.questions.*.q' => 'required|string',
            'clients2Content.questions.*.r' => 'required|string',
            
        ]);

        try {

            DB::transaction(function () {

                $section = PageSection::where('name', 'clients2')->firstOrFail();

                $content = [
                    'subtitle'  => $this->clients2Content['subtitle'],
                    'subtitle2' => $this->clients2Content['subtitle2'],
                    'questions' => $this->clients2Content['questions'],
                    
                ];

                $section->update([
                    'title' => $this->title,
                    'content' => $content,
                    'order'   => 7,
                ]);

                $this->dispatch('show-toast', [
                    'type' => 'success',
                    'message' => 'Datos actualizados exitosamente!'
                ]);

            }, 3);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function updateContact()
    {   
        $this->validate([
            'title' => 'required|string|max:255',
            'contactContent.subtitle' => 'required|string|max:255',
            'contactContent.subtitle2' => 'required|string|max:255',
            'contactContent.contactInfoTitle' => 'required|string|max:255',
            'contactContent.contactInfoPlaceTitle' => 'required|string|max:255',
            'contactContent.contactInfoPlaceCities' => 'required|string|max:255',
            'contactContent.contactInfoEmailTitle' => 'required|string|max:255',
            'contactContent.contactInfoEmailEmails' => 'required|string|max:255',
            'contactContent.contactInfoPhoneTitle' => 'required|string|max:255',
            'contactContent.contactInfoPhonePhones' => 'required|string|max:255',
        ]);
        
        try {

            

            DB::transaction(function () {

                $section = PageSection::where('name', 'contact')->firstOrFail();

                $cities =  explode(',', $this->contactContent['contactInfoPlaceCities']);
                $emails =  explode(',', $this->contactContent['contactInfoEmailEmails']);
                $phones =  explode(',', $this->contactContent['contactInfoPhonePhones']);



                $content = [
                    'subtitle'  => $this->contactContent['subtitle'],
                    'subtitle2' => $this->contactContent['subtitle2'],
                    'contactInfo' => [
                        'title' => $this->contactContent['contactInfoTitle'],
                        'place' => [
                            'title' => $this->contactContent['contactInfoPlaceTitle'],
                            'cities' => $cities,
                        ],
                        'email' => [
                            'title' => $this->contactContent['contactInfoEmailTitle'],
                            'emails' => $emails,
                        ],
                        'phone' => [
                            'title' => $this->contactContent['contactInfoPhoneTitle'],
                            'phones' => $phones,
                        ],
                    ]
                ];

                $section->update([
                    'title' => $this->title,
                    'content' => $content,
                    'order'   => 8,
                ]);

                $this->dispatch('show-toast', [
                    'type' => 'success',
                    'message' => 'Datos actualizados exitosamente!'
                ]);

            }, 3);

        } catch (\Throwable $th) {
            throw $th;
        }
    }



    public function addQuestion()
    {
        $this->clients2Content['questions'][] = [
            'q' => '',
            'r' => '',
        ];
    }

    public function removeQuestion($index)
    {
        unset($this->clients2Content['questions'][$index]);
        $this->clients2Content['questions'] = array_values($this->clients2Content['questions']); // reindexar
    }
    /* primera seecion de index */
    private function loadHero($pageSection){
        $this->heroContent['paragraph1'] = $pageSection->content['paragraphs'][0] ?? '';
        $this->heroContent['paragraph2'] = $pageSection->content['paragraphs'][1] ?? '';
        $this->heroContent['button1_text'] = $pageSection->content['buttons'][0]['text'] ?? '';
        $this->heroContent['button1_url'] = $pageSection->content['buttons'][0]['link'] ?? '';
        $this->heroContent['button2_text'] = $pageSection->content['buttons'][1]['text'] ?? '';
        $this->heroContent['button2_url'] = $pageSection->content['buttons'][1]['link'] ?? '';
        $this->heroContent['social_link_linkedin'] = $pageSection->content['social'][0]['link'] ?? '';
        $this->heroContent['social_link_instagram'] = $pageSection->content['social'][1]['link'] ?? '';
        $this->heroContent['social_link_contact'] = $pageSection->content['social'][2]['link'] ?? '';

        // Buscar el medio actual (imagen o video de fondo)
        $media = $pageSection->media()->where('role', 'background')->first();

        if ($media) {
            $this->heroContent['currentMediaUrl'] = $media->url;
            $this->heroContent['currentMediaType'] = $media->type;
        }

        //$this->dispatch('loadEditorContent', $this->heroContent['paragraph']);
    }

    /* segunda seccion de index */
    private function loadVideo($pageSection){
        // Buscar el medio actual (imagen o video de fondo)
        $media = $pageSection->media()->where('role', 'background')->first();

        if ($media) {
            $this->videoContent['currentMediaUrl'] = $media->url;
            $this->videoContent['currentMediaType'] = $media->type;
        }
    }

    /* tercera seccion de index */
    private function loadAbout($pageSection){

        $this->aboutContent['subtitle'] = $pageSection->content['subtitle'] ?? '';
        $this->aboutContent['paragraph'] = $pageSection->content['paragraphs'][0] ?? '';
        $this->aboutContent['column1Title'] = $pageSection->content['columns'][0]['title'] ?? '';
        $this->aboutContent['column1Paragraph'] = $pageSection->content['columns'][0]['paragraph'] ?? '';
        $this->aboutContent['column2Title'] = $pageSection->content['columns'][1]['title'] ?? '';
        $this->aboutContent['column2Paragraph'] = $pageSection->content['columns'][1]['paragraph'] ?? '';
        $this->aboutContent['column3Title'] = $pageSection->content['columns'][2]['title'] ?? '';
        $this->aboutContent['column3Paragraph'] = $pageSection->content['columns'][2]['paragraph'] ?? '';

        // Buscar el medio actual (imagen o video de fondo)
        $media = $pageSection->media()->where('role', 'icon')->get();

        $this->aboutContent['column1IconUrl'] = $media->get(0)?->url ?? '';
        $this->aboutContent['column2IconUrl'] = $media->get(1)?->url ?? '';
        $this->aboutContent['column3IconUrl'] = $media->get(2)?->url ?? '';

        $this->dispatch('loadEditorContent', $this->aboutContent['paragraph']);
    }

    /* cuarta seccion de index */
    private function loadServices($pageSection){
        $this->servicesContent['subtitle'] = $pageSection->content['subtitle'] ?? '';
        $this->servicesContent['paragraph1'] = $pageSection->content['paragraphs'][0] ?? '';
        $this->servicesContent['paragraph2'] = $pageSection->content['paragraphs'][1] ?? '';
        $this->servicesContent['column1Title'] = $pageSection->content['columns'][0]['title'] ?? '';
        $this->servicesContent['column1Paragraph'] = $pageSection->content['columns'][0]['paragraph'] ?? '';
        $this->servicesContent['column2Title'] = $pageSection->content['columns'][1]['title'] ?? '';
        $this->servicesContent['column2Paragraph'] = $pageSection->content['columns'][1]['paragraph'] ?? '';
        $this->servicesContent['column3Title'] = $pageSection->content['columns'][2]['title'] ?? '';
        $this->servicesContent['column3Paragraph'] = $pageSection->content['columns'][2]['paragraph'] ?? '';
        $this->servicesContent['column4Title'] = $pageSection->content['columns'][3]['title'] ?? '';
        $this->servicesContent['column4Paragraph'] = $pageSection->content['columns'][3]['paragraph'] ?? '';

        // Buscar el medio actual (imagen o video de fondo)
        $media = $pageSection->media()->where('role', 'icon')->get();

        $this->servicesContent['column1IconUrl'] = $media->get(0)?->url ?? '';
        $this->servicesContent['column2IconUrl'] = $media->get(1)?->url ?? '';
        $this->servicesContent['column3IconUrl'] = $media->get(2)?->url ?? '';
        $this->servicesContent['column4IconUrl'] = $media->get(3)?->url ?? '';

        $this->dispatch('loadEditorContent', $this->servicesContent['paragraph1']);
    }


    /* quinta seccion de index */
    private function loadClients($pageSection){

        $this->clientsContent['subtitle'] = $pageSection->content['subtitle'] ?? '';
        $this->clientsContent['subtitle2'] = $pageSection->content['subtitle2'] ?? '';
        $this->clientsContent['paragraph'] = $pageSection->content['paragraphs'][0] ?? '';
        
        // Buscar el medio actual (imagen o video de fondo)
        $media = $pageSection->media()->where('role', 'thumbnail')->get();

        $this->clientsContent['img1Url'] = $media->get(0)?->url ?? '';
        $this->clientsContent['img2Url'] = $media->get(1)?->url ?? '';
        $this->clientsContent['img3Url'] = $media->get(2)?->url ?? '';
        $this->clientsContent['img4Url'] = $media->get(3)?->url ?? '';
        $this->clientsContent['img5Url'] = $media->get(4)?->url ?? '';
        $this->clientsContent['img6Url'] = $media->get(5)?->url ?? '';
    }


     /* sexta seccion de index */
    private function loadWorks($pageSection){
        
        $this->worksContent['paragraph'] = $pageSection->content['paragraphs'][0] ?? '';
        $this->worksContent['buttonText'] = $pageSection->content['button']['text'] ?? '';
        
        // Buscar el medio actual (imagen o video de fondo)
        $media = $pageSection->media()->where('role', 'thumbnail')->get();

        $this->worksContent['img1Url'] = $media->get(0)?->url ?? '';
        $this->worksContent['img2Url'] = $media->get(1)?->url ?? '';
        $this->worksContent['img3Url'] = $media->get(2)?->url ?? '';
        $this->worksContent['img4Url'] = $media->get(3)?->url ?? '';
        $this->worksContent['img5Url'] = $media->get(4)?->url ?? '';
        $this->worksContent['img6Url'] = $media->get(5)?->url ?? '';
    }

        /* septima seccion de index */
    private function loadClients2($pageSection){
        $this->clients2Content['subtitle'] = $pageSection->content['subtitle'] ?? '';
        $this->clients2Content['subtitle2'] = $pageSection->content['subtitle2'] ?? '';
        $this->clients2Content['questions'] = $pageSection->content['questions'] ?? [];
        
    }

        /* octava seccion de index */
    private function loadContact($pageSection){
        $this->contactContent['subtitle'] = $pageSection->content['subtitle'] ?? '';
        $this->contactContent['subtitle2'] = $pageSection->content['subtitle2'] ?? '';
        $this->contactContent['contactInfoTitle'] = $pageSection->content['contactInfo']['title'] ?? '';
        $this->contactContent['contactInfoPlaceTitle'] = $pageSection->content['contactInfo']['place']['title'] ?? '';
        $this->contactContent['contactInfoPlaceCities'] = implode(',',$pageSection->content['contactInfo']['place']['cities']) ?? '';
        $this->contactContent['contactInfoEmailTitle'] = $pageSection->content['contactInfo']['email']['title'] ?? '';
        $this->contactContent['contactInfoEmailEmails'] = implode(',',$pageSection->content['contactInfo']['email']['emails']) ?? '';
        $this->contactContent['contactInfoPhoneTitle'] = $pageSection->content['contactInfo']['phone']['title'] ?? '';
        $this->contactContent['contactInfoPhonePhones'] = implode(',',$pageSection->content['contactInfo']['phone']['phones']) ?? '';
        
    }



    public function render()
    {
        return view("livewire.admin.manage-site.{$this->pageSection}");
    }
}
