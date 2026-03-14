<!-- Start::main-content -->
<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">{{ $isEditMode ? 'Editar Vacante' : 'Crear Vacante' }}</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> Panel <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                        </a> </li>
                    <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="{{route('vacancy-sections')}}"> Lista de vacantes <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                        </a> </li>
                    <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                            href="javascript:void(0);">{{ $isEditMode ? 'Editar Vacante' : 'Crear Vacante' }}
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
                        Modo creación vacante
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
                            <div class="grid grid-cols-12 gp-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Resumen
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="grid grid-cols-12 sm:gap-6">
                                                <div class="xl:col-span-12 lf:col-span-12 md:col-span-12 sm:col-span-12 col-span-12 mb-4">
                                                     <x-textarea 
                                                        label="" 
                                                        id="summary" 
                                                        model="summary" 
                                                        placeholder="Resumen..." 
                                                        rows="2"
                                                    />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">Pricipales funciones</div>
                                    </div>
                                    <div class="box-body">
                                        @foreach($main_responsibilities as $index => $item)
                                        <div class="grid grid-cols-12 sm:gap-6">
                                            <div class="xl:col-span-8 lf:col-span-8 md:col-span-8 sm:col-span-12 col-span-12 mb-4 flex items-center">
                                                <div class="flex-1">
                                                    <x-input id="main_responsibilities" label="" placeholder="Función..." model="main_responsibilities.{{ $index }}" />
                                                </div>
                                                <i 
                                                    class="ri-delete-bin-5-line btn-danger ml-2 text-red-600 cursor-pointer"
                                                    wire:click="removeItem('main_responsibilities', {{ $index }})"
                                                >
                                                </i>
                                            </div>
                                        
                                        </div>
                                        @endforeach
                                        <button 
                                            type="button"
                                            wire:click="addItem('main_responsibilities')"
                                            class="ti-btn ti-btn-primary-full ti-btn-wave  me-[0.375rem]">

                                            + Agregar función

                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">Formación Académica</div>
                                    </div>
                                    <div class="box-body">
                                        @foreach($academic_requirements as $index => $item)
                                        <div class="grid grid-cols-12 sm:gap-6">
                                            <div class="xl:col-span-8 lf:col-span-8 md:col-span-8 sm:col-span-12 col-span-12 mb-4 flex items-center">
                                                <div class="flex-1">
                                                    <x-input id="academic_requirements" label="" placeholder="Requisito..." model="academic_requirements.{{ $index }}" />
                                                </div>
                                                <i 
                                                    class="ri-delete-bin-5-line btn-danger ml-2 text-red-600 cursor-pointer"
                                                    wire:click="removeItem('academic_requirements', {{ $index }})"
                                                >
                                                </i>
                                            </div>
                                        
                                        </div>
                                        @endforeach
                                        <button 
                                            type="button"
                                            wire:click="addItem('academic_requirements')"
                                            class="ti-btn ti-btn-primary-full ti-btn-wave  me-[0.375rem]">

                                            + Agregar item

                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">Experiencia</div>
                                    </div>
                                    <div class="box-body">
                                        @foreach($experience_requirements as $index => $item)
                                        <div class="grid grid-cols-12 sm:gap-6">
                                            <div class="xl:col-span-8 lf:col-span-8 md:col-span-8 sm:col-span-12 col-span-12 mb-4 flex items-center">
                                                <div class="flex-1">
                                                    <x-input id="experience_requirements" label="" placeholder="Requisito..." model="experience_requirements.{{ $index }}" />
                                                </div>
                                                <i 
                                                    class="ri-delete-bin-5-line btn-danger ml-2 text-red-600 cursor-pointer"
                                                    wire:click="removeItem('experience_requirements', {{ $index }})"
                                                >
                                                </i>
                                            </div>
                                        
                                        </div>
                                        @endforeach
                                        <button 
                                            type="button"
                                            wire:click="addItem('experience_requirements')"
                                            class="ti-btn ti-btn-primary-full ti-btn-wave  me-[0.375rem]">

                                            + Agregar experiencia

                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">Habilidades</div>
                                    </div>
                                    <div class="box-body">
                                        @foreach($skills as $index => $item)
                                        <div class="grid grid-cols-12 sm:gap-6">
                                            <div class="xl:col-span-8 lf:col-span-8 md:col-span-8 sm:col-span-12 col-span-12 mb-4 flex items-center">
                                                <div class="flex-1">
                                                    <x-input id="skills" label="" placeholder="Habilidad..." model="skills.{{ $index }}" />
                                                </div>
                                                <i 
                                                    class="ri-delete-bin-5-line btn-danger ml-2 text-red-600 cursor-pointer"
                                                    wire:click="removeItem('skills', {{ $index }})"
                                                >
                                                </i>
                                            </div>
                                        
                                        </div>
                                        @endforeach
                                        <button 
                                            type="button"
                                            wire:click="addItem('skills')"
                                            class="ti-btn ti-btn-primary-full ti-btn-wave  me-[0.375rem]">

                                            + Agregar habilidad

                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">¿Qué puedes esperar de nosotros a cambio?</div>
                                    </div>
                                    <div class="box-body">
                                        @foreach($benefits as $index => $item)
                                        <div class="grid grid-cols-12 sm:gap-6">
                                            <div class="xl:col-span-8 lf:col-span-8 md:col-span-8 sm:col-span-12 col-span-12 mb-4 flex items-center">
                                                <div class="flex-1">
                                                    <x-input id="benefits" label="" placeholder="Beneficio..." model="benefits.{{ $index }}" />
                                                </div>
                                                <i 
                                                    class="ri-delete-bin-5-line btn-danger ml-2 text-red-600 cursor-pointer"
                                                    wire:click="removeItem('benefits', {{ $index }})"
                                                >
                                                </i>
                                            </div>
                                        
                                        </div>
                                        @endforeach
                                        <button 
                                            type="button"
                                            wire:click="addItem('benefits')"
                                            class="ti-btn ti-btn-primary-full ti-btn-wave  me-[0.375rem]">

                                            + Agregar item

                                        </button>
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