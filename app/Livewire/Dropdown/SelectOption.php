<?php

namespace App\Livewire\Dropdown;

use App\Models\City;
use App\Models\Country;
use App\Models\Region;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class SelectOption extends Component
{   

    #[Modelable]

    public $value = null;

    public $name;

    #[Reactive]
    public $options;

    public function mount($name, $options){

        $this->name = $name;
        $this->options = $options;
        $this->options->ensure([Country::class,Region::class,City::class]);

    }

    public function render()
    {
        return view('livewire.dropdown.select-option');
    }
}
