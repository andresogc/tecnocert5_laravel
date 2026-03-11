<!-- Start::main-content -->
<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Editar sección inicio</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> Panel <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                        </a> </li>
                    <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> Editar página web <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                        </a> </li>
                    <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> Página principal <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                        </a> </li>
                    <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                            href="javascript:void(0);">Sección 7 - Preguntas frecuentes
                        </a> </li>
                </ol>
            </nav>
        </div>

        <div class="flex xl:my-auto right-content align-items-center">
            <div class="pe-1 xl:mb-0">
                <button type="button" class="ti-btn ti-btn-info-full text-white ti-btn-icon me-2 btn-b !mb-0">
                    <i class="mdi mdi-filter-variant"></i>
                </button>
            </div>
            <div class="pe-1 xl:mb-0">
                <button type="button" class="ti-btn ti-btn-danger-full text-white ti-btn-icon me-2 !mb-0">
                    <i class="mdi mdi-star"></i>
                </button>
            </div>
            <div class="pe-1 xl:mb-0">
                <button type="button" class="ti-btn ti-btn-warning-full text-white  ti-btn-icon me-2 !mb-0">
                    <i class="mdi mdi-refresh"></i>
                </button>
            </div>
            <div class="xl:mb-0">
                <div class="hs-dropdown ti-dropdown">
                    <button class="ti-btn ti-btn-primary-full text-white dropdown-toggle !mb-0" type="button"
                        id="dropdownMenuDate" data-bs-toggle="dropdown" aria-expanded="false">
                        14 Aug 2019 <i class="bi bi-chevron-down text-[.6rem] font-semibold"></i>
                    </button>
                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden !z-[100]" aria-labelledby="dropdownMenuDate">
                        <li><a class="ti-dropdown-item" href="javascript:void(0);">2015</a></li>
                        <li><a class="ti-dropdown-item" href="javascript:void(0);">2016</a></li>
                        <li><a class="ti-dropdown-item" href="javascript:void(0);">2017</a></li>
                        <li><a class="ti-dropdown-item" href="javascript:void(0);">2018</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <div class="grid grid-cols-12 gap-x-6">
        <div class="xl:col-span-12 col-span-12">
            <div class="box">
                <div class="box-header flex justify-between">
                    <div class="box-title">
                        Modo edición sección inicio
                    </div>
                </div>
                <div class="box-body">
                    <form action="">
                        <div class="text-gray-500 dark:text-white/70 p-5 border ltr:border-l-0 rtl:border-r-0 rounded-sm ltr:rounded-tl-none rtl:rounded-tr-none dark:border-white/10 border-gray-200">
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">Título</div>
                                    </div>
                                    <div class="box-body">
                                        <div class="grid grid-cols-12 sm:gap-6">
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12 mb-4">
                                                <x-input id="title" label="" placeholder="Título..." model="title" />
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">Subtítulo</div>
                                    </div>
                                    <div class="box-body">
                                        <div class="grid grid-cols-12 sm:gap-6">
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12 mb-4">
                                                <x-input id="subtitle" label="" placeholder="Subtítulo..." model="clients2Content.subtitle" />
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">Subtítulo 2</div>
                                    </div>
                                    <div class="box-body">
                                        <div class="grid grid-cols-12 sm:gap-6">
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12 mb-4">
                                                <x-input id="subtitle2" label="" placeholder="Subtítulo2..." model="clients2Content.subtitle2" />
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Start:: row-1 -->
                            <div class="grid grid-cols-12 gp-6">
                                <div class="xl:col-span-12 col-span-12">
                                    
                                     @foreach ($clients2Content['questions'] as $index => $q)
                                        <div class="border rounded p-3 mb-3">
                                            <div class="d-flex justify-content-between">
                                                <strong>Pregunta #{{ $index + 1 }}</strong>
                                                

                                                <button 
                                                    aria-label="button" 
                                                    type="button"
                                                    class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn"
                                                    wire:click="removeQuestion({{ $index }})"
                                                    title="Eliminar"
                                                >
                                                    <i class="ri-delete-bin-5-line"></i>
                                                </button>
                                            </div>

                                            <div class="mt-3">
                                                <x-input id="contactInfoPlaceTitle" label="Pregunta" placeholder="Pregunta..." model="clients2Content.questions.{{ $index }}.q" />
                                            </div>

                                            <div class="mt-3">
                                                <x-textarea 
                                                    label="Respuesta" 
                                                    id="subtitle" 
                                                    model="clients2Content.questions.{{ $index }}.r" 
                                                    placeholder="Respuesta..." 
                                                    rows="2"
                                                />
                                            </div>
                                        </div>
                                    @endforeach

                                    Añadir pregunta

                                    <button 
                                        aria-label="button" 
                                        type="button" 
                                        class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"
                                        wire:click="addQuestion"
                                        title="añadir"
                                    >
                                       <i class="las la-plus"></i>
                                    </button>


                                </div>
                            </div>
                            <!-- End:: row-1 -->
                           

                            <div class="xl:col-span-4 lf:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 mt-8 p-5 flex justify-end">
                                <button 
                                    type="button" 
                                    class="ti-btn ti-btn-primary-full mt-0" 
                                    wire:click="update"
                                    wire:loading.attr="disabled"
                                >
                                        <span wire:loading.remove wire:target="update">Guardar</span>
                                        <span wire:loading wire:target="update">Guardando...</span>
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End::row-1 -->
    <!-- Modal Content -->

</div>
@push('scripts')


@endpush