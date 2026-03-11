<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public $label;
    public $id;
    public $model;
    public $options;
    public $errorKey;

    public function __construct($label, $id, $model, $options, $errorKey = null)
    {
        $this->label = $label;
        $this->id = $id;
        $this->model = $model;
        $this->options = $options;
        $this->errorKey = $errorKey ?? $id; // si no envías errorKey, usa el id
    }

    public function render()
    {
        return view('components.select');
    }
}
