<!-- Start::main-content -->
<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Lista de Publicaciones</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> Publicaciones <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                        </a> </li>
                   
                    <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                            href="javascript:void(0);">Novedades Técnicas
                        </a> </li>
                </ol>
            </nav>
        </div>

       
    </div>
    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <div class="grid grid-cols-12 gap-x-6">
        <div class="xl:col-span-12 col-span-12">
            <div class="box">
                <div class="box-header flex justify-between">
                    <div class="box-title">
                        Publicación de Novedades Técnicas
                    </div>
                    <div class="flex">
                        <button 
                            type="button" 
                            class="hs-dropdown-toggle ti-btn ti-btn-primary-full"
                            {{-- data-hs-overlay="#customerModal" --}}
                            wire:click="create"
                        >
                            <i class="ri ri-add-line"></i> Crear Publicación
                        </button>

                        <div class="hs-dropdown ti-dropdown ms-2">
                            <button aria-label="button" type="button"
                                class="ti-btn ti-btn-secondary !mb-0 ti-btn-sm" aria-expanded="false">
                                <i class="ti ti-dots-vertical"></i>
                            </button>
                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                        href="javascript:void(0);">Todos los blogs</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                        href="javascript:void(0);">Blogs Publicados</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                        href="javascript:void(0);">Blogs en borrador</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="box-body w-full ">
                    @include('livewire.admin.manage-site.post-partials._table')
                </div>
                <div class="box-footer">
                    {{ $posts->links('vendor.pagination.ti-pagination') }}
                </div>
            </div>
        </div>
    </div>
    <!--End::row-1 -->
</div>
@push('scripts')


@endpush

