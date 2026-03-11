@if ($paginator->hasPages())
    <nav class="blog-pagination justify-content-center d-flex">
        <ul class="pagination">
            {{-- Botón anterior --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link" aria-hidden="true"><i class="ti-angle-left"></i></span>
                </li>
            @else
                <li class="page-item">
                    <button wire:click="previousPage" class="page-link" aria-label="Previous">
                        <i class="ti-angle-left"></i>
                    </button>
                </li>
            @endif

            {{-- Números de página --}}
            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                                <span class="page-link">{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item">
                                <button wire:click="gotoPage({{ $page }})" class="page-link">
                                    {{ $page }}
                                </button>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Botón siguiente --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <button wire:click="nextPage" class="page-link" aria-label="Next">
                        <i class="ti-angle-right"></i>
                    </button>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link" aria-hidden="true"><i class="ti-angle-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
