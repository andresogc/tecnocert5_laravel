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
                            href="javascript:void(0);">Sección 3 - Sobre nosotros
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
                        Modo edición sección sobre nosotros
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
                                        <div class="xl:col-span-12 lf:col-span-12 md:col-span-12 sm:col-span-12 col-span-12 mb-4">
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
                                        <div class="xl:col-span-12 lf:col-span-12 md:col-span-12 sm:col-span-12 col-span-12 mb-4">
                                                <x-input id="subtitle" label="" placeholder="Subtítulo..." model="aboutContent.subtitle" />
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Start:: row-1 -->
                            <div class="grid grid-cols-12 gp-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Parrafo 
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div wire:ignore>
                                                 <div id="editor"></div>
                                            </div>
                                           
                                            <input type="hidden" id="editorContent" wire:model="aboutContent.paragraph">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-1 -->

                            {{-- subseccion1 --}}
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">Subsección 1</div>
                                    </div>
                                    <div class="box-body">
                                        <div class="grid grid-cols-12 sm:gap-6">
                                            <div class="xl:col-span-12 lf:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                                <x-input id="column1Title" label="Título" placeholder="Título..." model="aboutContent.column1Title" />
                                            </div>
                                            <div class="xl:col-span-12 lf:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                                
                                                 <x-textarea 
                                                        label="Parrafo" 
                                                        id="column1Paragraph" 
                                                        model="aboutContent.column1Paragraph" 
                                                        placeholder="Extracto..." 
                                                        rows="6"
                                                    />
                                            </div>

                                            
                                            <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                                <label for="">Imagen </label>
                                                <x-input-file-filepond  class="basic-filepond1" model="aboutContent.media1" multiple/>
                                            </div>


                                            <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                                @if ($aboutContent['column1IconUrl'])
                                                    <div class="mt-4 mb-6">
                                                        <label class="block text-sm font-medium text-gray-700 mb-2">Archivo actual:</label>
                                                            <img src="{{ asset($aboutContent['column1IconUrl']) }}" alt="Fondo actual" class="rounded-lg shadow-md max-h-60 object-cover" style="width:100px;height:100px;background-size: cover; ">
                                                    </div>
                                                @endif
                                            </div>
                                            
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- subseccion2 --}}
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">Subsección 2</div>
                                    </div>
                                    <div class="box-body">
                                        <div class="grid grid-cols-12 sm:gap-6">
                                            <div class="xl:col-span-12 lf:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                                <x-input id="column1Title" label="Título" placeholder="Título..." model="aboutContent.column2Title" />
                                            </div>
                                            <div class="xl:col-span-12 lf:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                                
                                                 <x-textarea 
                                                        label="Parrafo" 
                                                        id="column2Paragraph" 
                                                        model="aboutContent.column2Paragraph" 
                                                        placeholder="Extracto..." 
                                                        rows="6"
                                                    />
                                            </div>

                                            
                                            <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                                <label for="">Imagen </label>
                                                <x-input-file-filepond  class="basic-filepond2" model="aboutContent.media2" multiple/>
                                            </div>


                                            <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                                @if ($aboutContent['column2IconUrl'])
                                                    <div class="mt-4 mb-6">
                                                        <label class="block text-sm font-medium text-gray-700 mb-2">Archivo actual:</label>
                                                            <img src="{{ asset($aboutContent['column2IconUrl']) }}" alt="Fondo actual" class="rounded-lg shadow-md max-h-60 object-cover" style="width:100px;height:100px;background-size: cover; ">
                                                    </div>
                                                @endif
                                            </div>
                                            
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- subseccion3 --}}
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">Subsección 3</div>
                                    </div>
                                    <div class="box-body">
                                        <div class="grid grid-cols-12 sm:gap-6">
                                            <div class="xl:col-span-12 lf:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                                <x-input id="column1Title" label="Título" placeholder="Título..." model="aboutContent.column3Title" />
                                            </div>
                                            <div class="xl:col-span-12 lf:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                                
                                                 <x-textarea 
                                                        label="Parrafo" 
                                                        id="column3Paragraph" 
                                                        model="aboutContent.column3Paragraph" 
                                                        placeholder="Extracto..." 
                                                        rows="6"
                                                    />
                                            </div>

                                            
                                            <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                                <label for="">Imagen </label>
                                                <x-input-file-filepond  class="basic-filepond3" model="aboutContent.media3" multiple/>
                                            </div>


                                            <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                                @if ($aboutContent['column3IconUrl'])
                                                    <div class="mt-4 mb-6">
                                                        <label class="block text-sm font-medium text-gray-700 mb-2">Archivo actual:</label>
                                                            <img src="{{ asset($aboutContent['column3IconUrl']) }}" alt="Fondo actual" class="rounded-lg shadow-md max-h-60 object-cover" style="width:100px;height:100px;background-size: cover; ">
                                                    </div>
                                                @endif
                                            </div>
                                            
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                           

                           

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