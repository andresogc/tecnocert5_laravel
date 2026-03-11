<!-- Start::main-content -->
<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">{{ $isEditMode ? 'Editar Blog' : 'Crear Blog' }}</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> Panel <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                        </a> </li>
                    <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="{{route('blogSections')}}"> Lista de blogs <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                        </a> </li>
                    <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                            href="javascript:void(0);">{{ $isEditMode ? 'Editar Blog' : 'Crear Blog' }}
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
                        Modo creación blog
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
                                        <div class="xl:col-span-8 lf:col-span-8 md:col-span-8 sm:col-span-12 col-span-12 mb-4">
                                                <x-input id="title" label="" placeholder="Título..." model="title" />
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
                                                Contenido
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div wire:ignore>
                                                 <div id="editor"></div>
                                            </div>
                                            <input type="hidden" id="editorContent" wire:model="content">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-1 -->

                             <div class="grid grid-cols-12 gp-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Extracto
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="grid grid-cols-12 sm:gap-6">
                                                <div class="xl:col-span-12 lf:col-span-12 md:col-span-12 sm:col-span-12 col-span-12 mb-4">
                                                     <x-textarea 
                                                        label="" 
                                                        id="excerpt" 
                                                        model="excerpt" 
                                                        placeholder="Extracto..." 
                                                        rows="2"
                                                    />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Imagen destacada <span class="text-muted">(tamaño recomendado: 750 × 375 px — máximo 2 MB)</span></div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 sm:gap-6">
                                       
                                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                            <x-input-file-filepond  wire:model='media' multiple/>
                                        </div>


                                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                            @if ($currentMediaUrl)
                                                <div class="mt-4 mb-6">
                                                    

                                                    @if ($currentMediaType === 'image')
                                                        <img src="{{ asset($currentMediaUrl) }}" alt="Fondo actual" class="rounded-lg shadow-md object-cover w-[300px] h-[180px]">
                                                    @elseif ($currentMediaType === 'video')
                                                        <video controls class="rounded-lg shadow-md max-h-60" autoplay muted loop>
                                                            <source src="{{ asset($currentMediaUrl) }}" type="video/mp4">
                                                            Tu navegador no soporta la reproducción de video.
                                                        </video>
                                                    @endif
                                                    <label class="box-title block text-sm font-medium text-gray-700 mb-2">Archivo actual</label>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Estado</div>
                                </div>
                                <div class="box-body">
                                     <div class="grid grid-cols-12 sm:gap-6">
                                    <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-6 col-span-6">
                                        <x-select 
                                            label="" 
                                            id="status" 
                                            model="status" 
                                            :options="$statusOptions" 
                                        />
                                        </div> 
                                    </div>
                                </div>
                            </div>


                            <div class="xl:col-span-4 lf:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 mt-8 p-5 flex justify-end">
                                <button 
                                    type="button" 
                                    class="ti-btn ti-btn-primary-full mt-0" 
                                     wire:click="{{ $isEditMode ? 'update' : 'store' }}"
                                    wire:loading.attr="disabled"
                                >
                                        <span wire:loading.remove>{{ $isEditMode ? 'Actualizar' : 'Guardar' }}</span>
                                        <span wire:loading>{{ $isEditMode ? 'Actualizando...' : 'Guardando...' }}</span>
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