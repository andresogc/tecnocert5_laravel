<div >
    <label for="city_id" class="ti-form-select rounded-sm !py-2 !px-3-label">{{ $label }}</label>
    {{-- Input visible --}}
    <input type="text" wire:model.live.debounce.300ms="query" wire:focus="clearSelection"
        class="py-2 px-3 ti-form-input focus:ring-blue-500 focus:border-blue-500"
        placeholder="Buscar {{ strtolower($label) }}...">

    {{-- Input oculto con el ID --}}
    <input type="hidden" name="city_id" value="{{ $selectedCityId }}">

    {{-- Lista de resultados --}}
    @if($showDropdown && count($cities) > 0)
    <ul class="absolute z-10 bg-black border border-black rounded-lg w-full mt-1 max-h-60 overflow-auto shadow-md">
        @foreach($cities as $city)
        <li wire:click="selectCity({{ $city['id'] }})" class="px-3 py-2 hover:bg-blue-100 cursor-pointer">
            {{ $city['name'] }} - {{ $city['country_name'] }}
        </li>
        @endforeach
    </ul>
    @elseif($showDropdown && strlen($query) > 1)
    <ul class="absolute z-10 bg-black border border-black rounded-lg w-full mt-1 shadow-md">
        <li class="px-3 py-2 text-gray-500">No se encontraron resultados</li>
    </ul>
    @endif
</div>