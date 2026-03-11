@if ($paginator->hasPages())
    <nav aria-label="Page navigation">
        <ul class="ti-pagination ltr:float-right rtl:float-left mb-0">
            
            {{-- Botón "Anterior" --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link px-3 py-[0.375rem]">{{ __('pagination.previous') }}</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link px-3 py-[0.375rem]" href="{{ $paginator->previousPageUrl() }}" wire:click.prevent="previousPage" rel="prev">
                        {{ __('pagination.previous') }}
                    </a>
                </li>
            @endif

            {{-- Números de páginas --}}
            @foreach ($elements as $element)
                {{-- Separador "..." --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link px-3 py-[0.375rem]">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array de links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page">
                                <span class="page-link active px-3 py-[0.375rem]">{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link px-3 py-[0.375rem]" href="{{ $url }}" wire:click.prevent="gotoPage({{ $page }})">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Botón "Siguiente" --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link px-3 py-[0.375rem]" href="{{ $paginator->nextPageUrl() }}" wire:click.prevent="nextPage" rel="next">
                        {{ __('pagination.next') }}
                    </a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link px-3 py-[0.375rem]">{{ __('pagination.next') }}</span>
                </li>
            @endif

        </ul>
    </nav>
@endif
