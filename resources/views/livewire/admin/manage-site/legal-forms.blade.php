<!-- Start::main-content -->
<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">{{ $isEditMode ? 'Editar Documento' : 'Crear Documento' }}</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> Panel <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                        </a> </li>
                    <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="{{route('legal-sections')}}"> Lista de documentos <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                        </a> </li>
                    <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                            href="javascript:void(0);">{{ $isEditMode ? 'Editar Documento' : 'Crear Documento' }}
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
                        Modo actualización de documento
                    </div>
                </div>
                <div class="box-body">
                    <form action="">
                        <div class="text-gray-500 dark:text-white/70 p-5 border ltr:border-l-0 rtl:border-r-0 rounded-sm ltr:rounded-tl-none rtl:rounded-tr-none dark:border-white/10 border-gray-200">
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">Nombre a mostrar</div>
                                    </div>
                                    <div class="box-body">
                                        <div class="grid grid-cols-12 sm:gap-6">
                                        <div class="xl:col-span-8 lf:col-span-8 md:col-span-8 sm:col-span-12 col-span-12 mb-4">
                                                <x-input id="name" label="" placeholder="Título..." model="name" />
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Documento <span class="text-muted">(PDF, Word o Excel — máximo 2 MB)</span></div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 sm:gap-6">
                                       
                                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                            <x-input-file-filepond  class="basic-filepond6" model='file' multiple/>
                                        </div>


                                        <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                           @if ($file_path)
                                            <div class="box">
    
                                                    <div class="box-header">
                                                    <div class="box-title">Documento Actual</div>
                                                    </div>

                                                    <div class="box-body">

                                                        <div class="flex items-center gap-3">
                                                            @php
                                                                $ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

                                                                $icon = match($ext) {
                                                                    'pdf' => 'ri-file-pdf-line text-red-600',
                                                                    'doc', 'docx' => 'ri-file-word-line text-blue-600',
                                                                    'xls', 'xlsx' => 'ri-file-excel-line text-green-600',
                                                                    default => 'ri-file-line text-gray-600'
                                                                };
                                                            @endphp
                                                            {{-- <i class="ri-file-text-line text-2xl text-blue-600"></i> --}}
                                                                <i class="{{ $icon }} text-2xl"></i>
                                                            <p class="text-sm text-gray-700">
                                                                {{ basename($file_path) }}
                                                            </p>
                                                        </div>
                                                        @php
                                                            $ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
                                                        @endphp
                                                         
                                                        <div class="grid grid-cols-12 sm:gap-6">
                                                            @if($ext === 'pdf')
                                                            <div class="xl:col-span-1 lf:col-span-1 md:col-span-1 sm:col-span-1 col-span-1 ">
                                                                <a href="{{ asset($file_path) }}" 
                                                                target="_blank"
                                                                class="ti-btn ti-btn-info-full ">
                                                                Ver
                                                                </a>
                                                               
                                                            </div>
                                                            @endif
                                                            <div class="xl:col-span-1 lf:col-span-1 md:col-span-1 sm:col-span-1 col-span-1 ">
                                                                <a href="{{ asset($file_path) }}" 
                                                                download
                                                                class="ti-btn ti-btn-success-full ">
                                                                Descargar
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            @endif
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