
<div {{-- class="grid grid-cols-1 md:grid-cols-3 gap-4" --}} class="flex-1 min-w-[200px]">
    <label class="ti-form-select rounded-sm !py-2 !px-3-label">{{ $name }}</label>
    <select 
        class="ti-form-select rounded-sm !py-2 !px-3" 
        wire:model.live="value"
    >
        <option value="" selected>Seleccione {{ $name }}</option>
        
            @foreach ($options as $option)
                <option value="{{ $option->id }}">{{ $option->name }}</option>
            @endforeach
        
    </select>
</div>

