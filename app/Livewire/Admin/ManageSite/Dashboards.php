<?php

namespace App\Livewire\Admin\ManageSite;

use App\Models\Vacancy;
use Livewire\Component;

class Dashboards extends Component
{
    public function render()
    {   
         $vacancies = Vacancy::orderBy('created_at','DESC')->paginate(5);
        return view('livewire.admin.manage-site.vacancy-sections',compact('vacancies'));
    }
}
