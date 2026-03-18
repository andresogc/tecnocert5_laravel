<?php

namespace App\Livewire\MainPage;

use App\Models\Legal;
use App\Models\Page;
use App\Models\PageSection;
use App\Models\Post;
use App\Models\Section;
use App\Models\Vacancy;
use Livewire\Component;
use Livewire\WithPagination;

class MainPages extends Component
{   
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $currentPage;
    public $selectedPost = null;
    public $showModal = false;


    
     public function mount($page = 'index',$slug = null)
    {
        $this->currentPage = $page;
       
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

        $current = $layouts[$this->currentPage] ?? $layouts['index'];
       
        /*************** *
        seccion pagina principal
        ******************/
          //cargamos datos de la pagina principal index seccion hero.(La primera seccion)

        $index = $this->currentPage === 'index'
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
        $iso9001 = $this->currentPage === 'iso9001'
            ? Page::with([
                'sections' => function ($query) {
                    $query->orderBy('order');
                },
                'sections.media' => function ($query) {
                    $query->orderBy('order');
                },
            ])->where('slug', 'iso9001')->first()
            : null;

        $gapAnalisis = $this->currentPage === 'gap_analisis'
            ? Page::with([
                'sections' => function ($query) {
                    $query->orderBy('order');
                },
                'sections.media' => function ($query) {
                    $query->orderBy('order');
                },
            ])->where('slug', 'gap_analisis')->first()
            : null;

        $auditoriaInterna = $this->currentPage === 'auditoria_interna'
            ? Page::with([
                'sections' => function ($query) {
                    $query->orderBy('order');
                },
                'sections.media' => function ($query) {
                    $query->orderBy('order');
                },
            ])->where('slug', 'auditoria_interna')->first()
            : null;

        $capacitacion = $this->currentPage === 'capacitacion'
            ? Page::with([
                'sections' => function ($query) {
                    $query->orderBy('order');
                },
                'sections.media' => function ($query) {
                    $query->orderBy('order');
                },
            ])->where('slug', 'capacitacion')->first()
            : null;

        $blog = $this->currentPage === 'blog'
        ? Page::with([
            'sections' => function ($query) {
                $query->orderBy('order');
            },
            'sections.media' => function ($query) {
                $query->orderBy('order');
            },
        ])->where('slug', 'blog')->first()
        : null;

        $work = $this->currentPage === 'work'
        ? Page::with([
            'sections' => function ($query) {
                $query->orderBy('order');
            },
            'sections.media' => function ($query) {
                $query->orderBy('order');
            },
        ])->where('slug', 'work')->first()
        : null;

        $contact = $this->currentPage === 'contact'
        ? Page::with([
            'sections' => function ($query) {
                $query->orderBy('order');
            },
            'sections.media' => function ($query) { 
                $query->orderBy('order');
            },
        ])->where('slug', 'contact')->first()
        : null;

        
        $questions = $this->currentPage === 'questions'
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
        listado de posts para la vista blog
        ******************/
        $posts = Post::whereHas('media')
            ->with(['media'])
            ->orderBy('published_at','desc')
            ->paginate(3);
          

        /* datos para seccion work -- vacantes */
        $vacancies = Vacancy::orderBy('published_at','asc')
            ->where('status', 'active')
            ->paginate(1);  

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
    
        return view("livewire.main-page.{$this->currentPage}",[
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
            //listado de posts para la vista blog(solo para la carga inicial ya que depues se usa un controlador para paginar y cargar los posts dinamicamente)
            'posts' => $posts ,
            //Datos de la vista work y vista index para llenar vacantes
            'vacancies' => $vacancies,
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
                'legals' => $legals,
                'showModal' => $this->showModal,
            'selectedPost' => $this->selectedPost,
                
            ]);


        
    }
}
