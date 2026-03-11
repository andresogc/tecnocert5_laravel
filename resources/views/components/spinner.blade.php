@props([
    
    'label' => 'cargando...',
    'target' => null,
    
])
<div wire:loading wire:target="{{ $target }}" class="flex justify-center items-center py-6">
    <div class="space-x-6 rtl:space-x-reverse space-y-4">
        <div class="ti-spinner !w-4 !h-4 !animate-ping !border-transparent  bg-primary"
            role="status" aria-label="loading">
            <span class="sr-only">Loading...</span>
        </div>

        <div class="ti-spinner !animate-ping !border-transparent  bg-primary" role="status"
            aria-label="loading">
            <span class="sr-only">Loading...</span>
        </div>

        <div class="ti-spinner !w-8 !h-8 !animate-ping !border-transparent  bg-primary"
            role="status" aria-label="loading">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="mt-5 text-center">
        <span class="text-gray-600 dark:text-gray-300 ">{{ $label }}</span>
    </div>
</div>