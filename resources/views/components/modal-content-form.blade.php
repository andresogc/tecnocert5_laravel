@props(['id', 'title' => 'Modal', 'submit', 'button' => 'Guardar', 'size' => 'lg'])
<div 
    id="{{ $id }}"
    class="hs-overlay hidden ti-modal [--overlay-backdrop:static]"
    wire:ignore.self
    x-data
    x-on:close-modal.window="if($event.detail.id === '{{ $id }}'){ $el.classList.add('hidden'); }"
>
    <div
        @if($size === 'lg')
        class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto"
        @elseif($size === 'fs')
        class="hs-overlay-open:mt-0 ti-modal-box mt-10 !m-0 !max-w-full !w-full"
        @else
        class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto"
        @endif
        >

        <div
            class="flex flex-col bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 shadow-sm rounded-sm pointer-events-auto">
            <div
                class="flex justify-between items-center py-3 px-4 border-b border-defaultborder dark:border-defaultborder/10">
                <h6 class="modal-title text-[1rem] font-semibold" id="mail-ComposeLabel"> {{ $title ?? 'Modal' }}</h6>
                <button type="button"
                    class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                    data-hs-overlay="#{{ $id }}">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
            <form {{ $attributes->merge(['wire:submit.prevent' => $submit]) }}>
                <div class="p-4 overflow-y-auto">
                    {{$slot}}
                </div>
                <div
                    class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-defaultborder dark:border-defaultborder/10">
                    <button type="button" class="ti-btn  ti-btn-light" data-hs-overlay="#{{ $id }}">
                        Cancelar
                    </button>
                    <button type="submit" class="ti-btn bg-primary text-white !font-medium">{{$button ?? 'Guardar'}} </button>
                </div>
            </form>
        </div>
    </div>
</div>