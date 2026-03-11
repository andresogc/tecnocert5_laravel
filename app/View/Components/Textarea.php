<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    public $label;
    public $id;
    public $model;
    public $placeholder;
    public $rows;
    public $errorKey;

    public function __construct($label, $id, $model, $placeholder = '', $rows = 3, $errorKey = null)
    {
        $this->label = $label;
        $this->id = $id;
        $this->model = $model;
        $this->placeholder = $placeholder;
        $this->rows = $rows;
        $this->errorKey = $errorKey ?? $id;
    }

   
    public function render(): View|Closure|string
    {
        return view('components.textarea');
    }
}
