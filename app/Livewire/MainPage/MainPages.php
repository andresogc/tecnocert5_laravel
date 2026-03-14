<?php

namespace App\Livewire\MainPage;

use App\Models\Legal;
use App\Models\Page;
use App\Models\PageSection;
use App\Models\Post;
use App\Models\Section;
use Livewire\Component;
use Livewire\WithPagination;

class MainPages extends Component
{   
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $page;
    public $slug;
    public $post;
    public $previousPost;
    public $nextPost;

    

    public function mount($page = 'index',$slug = null)
    {
        $this->page = $page;
        $this->slug = $slug;
       /*  dd($this->page, $this->slug); */
        // 👇 si la página actual es "blog_detail", cargamos el blog
        if ($this->page === 'blog_detail' && $this->slug) {
            $this->post = Post::where('slug', $this->slug)->firstOrFail(); 

            // Post anterior (uno más viejo)
            $this->previousPost = Post::where(function ($query) {
                    $query->where('published_at', '<', $this->post->published_at)
                        ->orWhere(function ($q) {
                            $q->where('published_at', $this->post->published_at)
                                ->where('id', '<', $this->post->id);
                        });
                })
                ->where('status', 'published')
                ->orderBy('published_at', 'desc')
                ->orderBy('id', 'desc')
                ->first();

            // Post siguiente (uno más nuevo)
            $this->nextPost = Post::where(function ($query) {
                    $query->where('published_at', '>', $this->post->published_at)
                        ->orWhere(function ($q) {
                            $q->where('published_at', $this->post->published_at)
                                ->where('id', '>', $this->post->id);
                        });
                })
                ->where('status', 'published')
                ->orderBy('published_at', 'asc')
                ->orderBy('id', 'asc')
                ->first();

        }
    }

    
    public function updatingPage()
    {
        $this->dispatch('scroll-to-top');
    }


    public function render()
    {   

        $layouts = [
            'index' => ['head' => 'head', 'header' => 'header','navbar' => 'navbar', 'footer' => 'footer'],
            'iso9001' => ['head' => 'head', 'header' => 'header','navbar' => 'navbar', 'footer' => 'footer'],
            'gap_analisis' => ['head' => 'head', 'header' => 'header','navbar' => 'navbar', 'footer' => 'footer'],
            'auditoria_interna' => ['head' => 'head', 'header' => 'header','navbar' => 'navbar', 'footer' => 'footer'],
            'capacitacion' => ['head' => 'head', 'header' => 'header','navbar' => 'navbar', 'footer' => 'footer'],
            'blog' => ['head' => 'head', 'header' => 'header','navbar' => 'navbar', 'footer' => 'footer'],
            'work' => ['head' => 'head', 'header' => 'header','navbar' => 'navbar', 'footer' => 'footer'], 
            'contact' => ['head' => 'head', 'header' => 'header','navbar' => 'navbar', 'footer' => 'footer'], 
            'questions' => ['head' => 'head', 'header' => 'header','navbar' => 'navbar', 'footer' => 'footer'], 
        ];

        $current = $layouts[$this->page] ?? $layouts['main-pages'];
       
        /*************** *
        seccion pagina principal
        ******************/
          //cargamos datos de la pagina principal index seccion hero.(La primera seccion)

        $index = $this->page === 'index'
            ? Page::with([
                'sections' => function ($query) {
                    $query->orderBy('order');
                },
                'sections.media' => function ($query) {
                    $query->orderBy('order');
                },
            ])->where('slug', 'index')->first()
            : null;

        /*************** *
        iso9001, gap analisis y auditoria interna, capacitacion, blog, work y contact
        ******************/
        $iso9001 = $this->page === 'iso9001'
            ? Page::with([
                'sections' => function ($query) {
                    $query->orderBy('order');
                },
                'sections.media' => function ($query) {
                    $query->orderBy('order');
                },
            ])->where('slug', 'iso9001')->first()
            : null;

        $gapAnalisis = $this->page === 'gap_analisis'
            ? Page::with([
                'sections' => function ($query) {
                    $query->orderBy('order');
                },
                'sections.media' => function ($query) {
                    $query->orderBy('order');
                },
            ])->where('slug', 'gap_analisis')->first()
            : null;

        $auditoriaInterna = $this->page === 'auditoria_interna'
            ? Page::with([
                'sections' => function ($query) {
                    $query->orderBy('order');
                },
                'sections.media' => function ($query) {
                    $query->orderBy('order');
                },
            ])->where('slug', 'auditoria_interna')->first()
            : null;

        $capacitacion = $this->page === 'capacitacion'
            ? Page::with([
                'sections' => function ($query) {
                    $query->orderBy('order');
                },
                'sections.media' => function ($query) {
                    $query->orderBy('order');
                },
            ])->where('slug', 'capacitacion')->first()
            : null;

        $blog = $this->page === 'blog'
        ? Page::with([
            'sections' => function ($query) {
                $query->orderBy('order');
            },
            'sections.media' => function ($query) {
                $query->orderBy('order');
            },
        ])->where('slug', 'blog')->first()
        : null;

        $work = $this->page === 'work'
        ? Page::with([
            'sections' => function ($query) {
                $query->orderBy('order');
            },
            'sections.media' => function ($query) {
                $query->orderBy('order');
            },
        ])->where('slug', 'work')->first()
        : null;

        $contact = $this->page === 'contact'
        ? Page::with([
            'sections' => function ($query) {
                $query->orderBy('order');
            },
            'sections.media' => function ($query) { 
                $query->orderBy('order');
            },
        ])->where('slug', 'contact')->first()
        : null;

        
        $questions = $this->page === 'questions'
        ? Page::with([
            'sections' => function ($query) {
                $query->orderBy('order');
            },
            'sections.media' => function ($query) { 
                $query->orderBy('order');
            },
        ])->where('slug', 'questions')->first()
        : null;


        /*************** *
        secciones blog
        ******************/

         // 👇 Aquí cargamos los posts solo si estamos en "blog_tecnico"
        /*   $posts = $this->page === 'blog_tecnico'
                ? Post::where('status', 'published')
                    ->latest('published_at')
                    ->paginate(2)
                : null; */


        /* obtener jsons */
       /*  $faqsSlider = json_decode(file_get_contents(public_path('main-page/data/faqs-slider.json')), true); */

        $faqsSlider = json_decode(
            file_get_contents(storage_path('app/public/data/faqs-slider.json')),
            true
        );


        $legals = Legal::orderBy('order','asc')
            ->get()
            ->keyBy('id');

        foreach ($faqsSlider as &$faq) {

            if(isset($legals[$faq['legal_id']])) {

                $legal = $legals[$faq['legal_id']];

                $faq['download_path'] = asset($legal->file_path);
                $faq['document_name'] = $legal->name;

            }
        }
    
        return view("livewire.main-page.{$this->page}",[
            //seccion pagina principal
            'index' => $index,
            //otras secciones
            'iso9001'=>$iso9001,
            'gapAnalisis'=>$gapAnalisis,
            'auditoriaInterna'=>$auditoriaInterna,
            'capacitacion' =>$capacitacion,
            'blog' => $blog,
            'work' => $work,
            'contact' => $contact,
            'questions'=>$questions,
            //secciones post
            'post' => $this->post,
            'previousPost' => $this->previousPost,
            'nextPost' => $this->nextPost,
            //jsons
            'data'=>[
                'faqsSlider' => $faqsSlider,
            ],
          
        ])
            ->layout('layouts.public', [
                'headType' => $current['head'],
                'navbarType' => $current['navbar'],
                'headerType' => $current['header'],
                'footerType' => $current['footer'],
                'legals' => $legals
            ]);


        
    }
}
