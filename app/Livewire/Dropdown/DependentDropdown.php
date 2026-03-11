<?php

namespace App\Livewire\Dropdown;

use App\Models\City;
use App\Models\Country;
use App\Models\Region;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Component;

class DependentDropdown extends Component
{   
    public $countries;
    public $regions;
    public $cities;


    public $selectedCountry = null;
    public $selectedRegion = null;
    
    
    #[Modelable]   //para poder pasar el valor seleccionado al componente padre
    public $selectedCity = null;

    public function mount()
    {
        $this->countries = Country::orderBy('name')->get(['id','name']);
    }

    public function updatedSelectedCountry($country)
    {
        
        $this->regions = Region::where('country_id', $country)->get(['id','name']);
        $this->selectedRegion = null;
        $this->selectedCity = null;
    }

    public function updatedSelectedRegion($region)
    {
        $this->cities = City::where('region_id', $region)->get(['id','name']);
        $this->selectedCity = null;
    }



    #[On('setCustomerDropdowns')]
    public function setCustomerDropdowns($data)
    {
        $this->selectedCountry = $data['country_id'];
        $this->selectedRegion = $data['region_id'];
        $this->selectedCity = $data['city_id'];
        $this->regions = Region::where('country_id', $this->selectedCountry)->get(['id','name']);
        $this->cities = City::where('region_id', $this->selectedRegion)->get(['id','name']);
    }

    #[On('resetCustomerDropdowns')]
    public function resetDropdownsEvent()
    {
        $this->selectedCountry = null;
        $this->selectedRegion = null;
        $this->selectedCity = null;
        $this->regions = collect();
        $this->cities = collect();
    }

    

    public function render()
    {
        return view('livewire.dropdown.dependent-dropdown');
    }
}
