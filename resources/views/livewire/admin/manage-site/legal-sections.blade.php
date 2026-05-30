<!-- Start::main-content -->
<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Lista de documentos legales</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> Publicaciones <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                        </a> </li>
                   
                    <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                            href="javascript:void(0);">Legales
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
                        Publicación de Documentos Legales
                    </div>
                    <div class="flex">
                       
                       
                    </div>
                </div>
                <div class="box-body w-full ">
                    @include('livewire.admin.manage-site.legal-partials._table')
                </div>
                <div class="box-footer">
                    {{ $legals->links('vendor.pagination.ti-pagination') }}
                </div>
            </div>
        </div>
    </div>
    <!--End::row-1 -->
</div>
@push('scripts')


@endpush

