<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\VacancyController;
use App\Livewire\Admin\Customers\Customers;
use App\Livewire\Admin\ManageSite\Dashboards;
use App\Livewire\Admin\ManageSite\HomeSections;
use App\Livewire\Admin\ManageSite\LegalForms;
use App\Livewire\Admin\ManageSite\LegalSections;
use App\Livewire\Admin\ManageSite\PostForms;
use App\Livewire\Admin\ManageSite\PostSections;
use App\Livewire\Admin\ManageSite\VacancyForms;
use App\Livewire\Admin\ManageSite\VacancySections;
use App\Livewire\MainPage\MainPages;
use App\Models\Vacancy;
use Illuminate\Support\Facades\Route;


/**rutas pagina principal de TECNCOCERT  (publica)*/
Route::get('/', MainPages::class)->name('index');
Route::get('/iso9001', MainPages::class)->name('iso9001')->defaults('page', 'iso9001');
Route::get('/gap_analisis', MainPages::class)->name('gap_analisis')->defaults('page', 'gap_analisis');
Route::get('/auditoria_interna', MainPages::class)->name('auditoria_interna')->defaults('page', 'auditoria_interna');
Route::get('/capacitacion', MainPages::class)->name('capacitacion')->defaults('page', 'capacitacion');
Route::get('/blog', MainPages::class)->name('blog')->defaults('page', 'blog');
Route::get('/work', MainPages::class)->name('work')->defaults('page', 'work');
Route::get('/contact', MainPages::class)->name('contact')->defaults('page', 'contact');
Route::get('/questions', MainPages::class)->name('questions')->defaults('page', 'questions');

Route::get('/blog-posts', [PostController::class, 'paginatePosts']);
Route::get('/blog-post/{id}',[PostController::class,'getPost']);

Route::get('/vacancies', [VacancyController::class, 'vacanciesPage']);


/**rutas de panel de administrador TECNCOCERT (privada)*/
/* Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard'); */


Route::get('dashboard', Dashboards::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::get('home-sections/{pageSection}', HomeSections::class)
    ->middleware(['auth', 'verified'])
    ->name('homeSections');
/* legales*/
Route::get('legal-sections', LegalSections::class)
    ->middleware(['auth', 'verified'])
    ->name('legal-sections');
Route::get('legal-sections/create', LegalForms::class)
    ->middleware(['auth', 'verified'])
    ->name('legal-sections.create');
Route::get('legal-sections/{legal}/edit', LegalForms::class)
    ->middleware(['auth', 'verified'])
    ->name('legal-sections.edit');
/* vacancies */
 Route::get('vacancy-sections', VacancySections::class)
    ->middleware(['auth', 'verified'])
    ->name('vacancy-sections');

Route::get('vacancy-sections/create', VacancyForms::class)
    ->middleware(['auth', 'verified'])
    ->name('vacancy-sections.create');

Route::get('vacancy-sections/{vacancy}/edit', VacancyForms::class)
    ->middleware(['auth', 'verified'])
    ->name('vacancy-sections.edit');

/* posts */
Route::get('post-sections', PostSections::class)
    ->middleware(['auth', 'verified'])
    ->name('post-sections');

Route::get('post-sections/create', PostForms::class)
    ->middleware(['auth', 'verified'])
    ->name('post-sections.create');

Route::get('post-sections/{post}/edit', PostForms::class)
    ->middleware(['auth', 'verified'])
    ->name('post-sections.edit');

/* legals */
/* Route::get('legal-sections', LegalSections::class)
    ->middleware(['auth', 'verified'])
    ->name('legal-sections'); */


Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    /* Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit'); */
});


require __DIR__.'/auth.php';
