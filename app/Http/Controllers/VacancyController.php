<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function vacanciesPage(Request $request)
    {
        $vacancies = Vacancy::orderBy('published_at','asc')
            ->where('status', 'active')
            ->paginate(1);

        // 🔥 IMPORTANTE: misma vista parcial
        return view('partials.vacancies-content', compact('vacancies'));
    }
}
