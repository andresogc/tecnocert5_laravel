@props([
    'id',
    'label' => null,
    'type' => 'time',
    'placeholder' => '',
    'model',
    'required' => false,
    'wireModifier' => 'live', // valor por defecto
    'value' => ''
])


<div >
    @if($label)
        <label for="{{ $id }}" class="form-label !font-normal">
            {{ $label }} @if($required)*@endif
        </label>
    @endif

    <div class="relative">
        <input 
            type="{{ $type }}"
            id="{{ $id }}"
            placeholder="{{ $placeholder }}"
            wire:model{{ $wireModifier ? '.' . $wireModifier : '' }}="{{ $model }}"
            value="{{ $value }}"
            
            @class([
                'form-control placeholder:text-textmuted !rounded-full .form-control-sm ti-form-input',
                '!border-danger' => $errors->has($model),
                '!border-success' => !$errors->has($model) && filled($this->$model),
            ])
        >

        {{-- Icono dinámico --}}
        @if ($errors->has($model))
            {{-- Ícono de error --}}
            <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                <svg class="h-5 w-5 text-danger" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                </svg>
            </div>
        @elseif(filled($this->$model))
            {{-- Ícono de success --}}
            <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                <svg class="h-5 w-5 text-success" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                </svg>
            </div>
        @endif
    </div>

    {{-- Mensaje de error --}}
    @error($model)
        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
    @enderror
</div>
