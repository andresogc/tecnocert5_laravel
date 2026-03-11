@props([
    'id',
    'label' => null,
    'model',
    'wireModifier' => '',
    'disabled' => false

])
<div>
    <label for="input-label" class="form-label !font-normal">{{ $label }}:</label>
    <div class="py-2 px-3 inline-block bg-white border border-gray-200 rounded-sm dark:bg-bodybg dark:border-white/10" data-hs-input-number>
        <div class="flex items-center gap-x-1.5">
            <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-decrement @if($disabled) disabled @endif>
                <i class="ri-subtract-line"></i>
            </button>
            <input 
                class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white" 
                type="text" 
                id="{{ $id }}" 
                value="0" 
                data-hs-input-number-input
                wire:model{{ $wireModifier ? '.' . $wireModifier : '' }}="{{ $model }}"
                @if($disabled) disabled @endif
            >
            <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-increment @if($disabled) disabled @endif>
                <i class="ri-add-line"></i>
            </button>
        </div>
    </div>
</div>
