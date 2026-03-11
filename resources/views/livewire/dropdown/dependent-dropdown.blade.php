<div class="flex flex-wrap gap-4">
        <livewire:dropdown.select-option  name="País" :options="$countries" wire:model.live="selectedCountry" />
    @if (!is_null($selectedCountry))
        <livewire:dropdown.select-option  name="Región" :options="$regions" wire:model.live="selectedRegion" />
    @endif
    @if (!is_null($selectedRegion))
        <livewire:dropdown.select-option  name="Ciudad" :options="$cities" wire:model.live="selectedCity"  />
    @endif
</div>
