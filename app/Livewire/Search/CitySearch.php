<?php

namespace App\Livewire\Search;

use App\Models\City;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class CitySearch extends Component
{   

    #[Modelable]
    public $selectedCityId = null;

    public string $query = '';
    public array $cities = [];
    public ?string $selectedCity = null;
    public bool $showDropdown = false;

    public $label = 'Ciudad'; // 👈 valor por defecto

   

    public function updatedQuery(): void
    {
        $this->selectedCity = null;
        $this->selectedCityId = null;

        if (strlen($this->query) > 1) {
            $this->cities = City::with('region.country')
                ->where('name', 'like', "%{$this->query}%")
                ->orderBy('name')
                ->take(10)
                ->get()
                ->map(function ($city) {
                    return [
                        'id' => $city->id,
                        'name' => $city->name,
                        'country_name' => $city->region->country->name,
                        'country_iso' => $city->region->country->iso,
                    ];
                })
                ->toArray();

            $this->showDropdown = true;
        } else {
            $this->cities = [];
            $this->showDropdown = false;
        }
    }
    

    public function selectCity(int $cityId): void
    {
        $city = City::with('region.country')->find($cityId);

        if ($city) {
            $this->selectedCityId = $city->id;
            $this->selectedCity = "{$city->name} ({$city->region->country->iso})";
            $this->query = $this->selectedCity;
            $this->showDropdown = false;

            // Emitir evento al componente padre si lo deseas
            $this->dispatch('city-selected', id: $city->id, name: $city->name . ' ('.  $city->region->country->iso  .')');
        }
    }

    public function clearSelection(): void
    {
        $this->reset(['query', 'selectedCity', 'selectedCityId', 'cities', 'showDropdown']);
    }

    
    public function render()
    {
        return view('livewire.search.city-search');
    }
}
