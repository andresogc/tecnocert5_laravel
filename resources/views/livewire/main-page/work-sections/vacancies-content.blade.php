<style>
 .blog-entry {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.block-20 {
    width: 100%;
    height: 200px;
    flex-shrink: 0;
}

.text {
    flex-grow: 1;
}
</style>
@foreach($vacancies as $vacancy)  
        <div wire:key="vacancy-{{ $vacancy->id }}">
            @if($vacancy)
            <div id="vacancy-data-{{ $vacancy->id }}"
                data-responsibilities='@json($vacancy->main_responsibilities)'
                data-academic='@json($vacancy->academic_requirements)'
                data-experience='@json($vacancy->experience_requirements)'
                data-skills='@json($vacancy->skills)'
                data-benefits='@json($vacancy->benefits)'>
            </div>
            @endif
            <div class="container">
                <div class="row justify-content-center pb-5 mb-3">
                    <div class="col-md-7 heading-section text-center ">
                        <!-- <h2>Expertos en la Norma: Análisis, Tendencias y Certificación</h2> -->
                        <h1 style="line-height: 1.5;
                            color: rgba(0, 0, 0, 0.8);
                            font-weight: 400;font-size: 24px; text-align: center; text-transform:uppercase;font-weight:bold">
                            VACANTES DISPONIBLES
                        </h1>
                        <span class="subheading">TECNOCERT</span>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-4  ">
                        <div class="blog-entry align-self-stretch">
                            <a href="#" class="block-20 rounded"
                                style="background-image: url('{{asset('main-page/images/image_6.jpg')}}')">
                            </a>
                            <div class="text mt-3" style="flex-grow: 0.3 !important;">
                                <div class="meta mb-2">
                                    <div><a href="#">{{ $vacancy->published_at->isoFormat('D MMMM YYYY') }}</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div>
                                        <!--<a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a>-->
                                    </div>
                                </div>
                                <h3 class="heading">
                                    <a href="#">{{ $vacancy->title }}</a>
                                </h3>
                            </div>
                            <div >
                                <a href="#" onclick="openVacanteModal({{ $vacancy->id }}, '{{ $vacancy->title }}')" class="btn btn-primary btn-lg shadow-sm" style="
                                    padding: 1rem 1.5rem;
                                    font-weight: 600;
                                    font-size: 0.9rem !important;
                                    border-radius: 8px;
                                    display:flex;
                                    justify-content:center
                                    " 
                                >
                                    Postulación
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8  ">
                        <h2 style="font-size:1.45rem">Resumen de la vacante</h2>
                        <p>{{ $vacancy->summary }}</p>

                        <h2 style="font-size:1.45rem">Sobre la vacante</h2>
                        <!-- accordeon -->
                        <div class="row justify-content-center mt-4">
                            <div class="col-md-12 d-flex services align-self-stretch px-4 ">
                                <div class="d-block ">
                                    <!-- inicio acordeon columna 1  preguntas-->
                                    <div class="accordion" id="accordion-vacante" ></div>
                                    <!-- fin acordeon columna 1  preguntas-->
                                </div>
                            </div>
                        </div>
                        <!--fin de accordeon-->
                


                    </div>
                </div>
            </div>
            
        </div>
    @endforeach

    <div class="col-12 mt-4 d-flex justify-content-center w-100">
    {!! $vacancies->links() !!}
</div>
 <style>

        .pagination{
            display:flex;
            align-items:center;
            justify-content:center;
            list-style:none;
            padding:0;
            gap:6px;
        }

        .page-item{
            display:inline-block;
        }

        .page-link{
               display:flex;
            align-items:center;
            justify-content:center;
            height:38px;
            padding:8px 14px;
            border:1px solid #ddd;
            border-radius:6px;
            text-decoration:none;
            color:#333;
            background:#fff;
            cursor:pointer;
            transition:all .2s ease;
        }

        .page-link:hover{
            background:#f5f5f5;
        }

        .page-item.active .page-link{
            background:#0d6efd;
            border-color:#0d6efd;
            color:#fff;
        }

        .page-item.disabled .page-link{
             display:flex;
            align-items:center;
            justify-content:center;
            color:#aaa;
            background:#f9f9f9;
            cursor:not-allowed;
        }

        .small.text-muted{
             display:none;
        }
        /* ocultar todos los items */
        .pagination li{
            display:none;
        }

        /* mostrar solo flecha izquierda y derecha */
        .pagination li:first-child,
        .pagination li:last-child{
            display:inline-block;
        }   
        /* ocultar versión escritorio completa */
        .d-sm-flex{
            display:none !important;
        }
        /* centrar botones */
        .pagination{
            display:flex;
            justify-content:center;
            gap:10px;
        }
        
    </style>