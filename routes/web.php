<?php

use App\Livewire\Admin\Customers\Customers;
use App\Livewire\Admin\ManageSite\HomeSections;
use App\Livewire\Admin\ManageSite\LegalSections;
use App\Livewire\Admin\ManageSite\PostForms;
use App\Livewire\Admin\ManageSite\PostSections;
use App\Livewire\MainPage\MainPages;
use Illuminate\Support\Facades\Route;


/**rutas pagina principal de ecogeosystems  (publica)*/
Route::get('/', MainPages::class)->name('index');
//rutas de blog
Route::get('/blog_tecnico', MainPages::class)->name('blog_tecnico')->defaults('page', 'blog_tecnico');
Route::get('/blog_detail/{slug}', MainPages::class)->name('blog_detail')->defaults('page', 'blog_detail');
//rutas de legales
Route::get('/iso9001', MainPages::class)->name('iso9001')->defaults('page', 'iso9001');
Route::get('/gap_analisis', MainPages::class)->name('gap_analisis')->defaults('page', 'gap_analisis');
Route::get('/auditoria_interna', MainPages::class)->name('auditoria_interna')->defaults('page', 'auditoria_interna');
Route::get('/capacitacion', MainPages::class)->name('capacitacion')->defaults('page', 'capacitacion');
Route::get('/blog', MainPages::class)->name('blog')->defaults('page', 'blog');
Route::get('/work', MainPages::class)->name('work')->defaults('page', 'work');
Route::get('/contact', MainPages::class)->name('contact')->defaults('page', 'contact');
Route::get('/questions', MainPages::class)->name('questions')->defaults('page', 'questions');

//ruta de preguntas
Route::get('/preguntas_frecuentes', MainPages::class)->name('preguntas_frecuentes')->defaults('page', 'preguntas_frecuentes');


/**rutas de panel de administrador ecogeosystems (privada)*/
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



Route::get('home-sections/{pageSection}', HomeSections::class)
    ->middleware(['auth', 'verified'])
    ->name('homeSections');

Route::get('legal-sections/{pageSection}', LegalSections::class)
    ->middleware(['auth', 'verified'])
    ->name('legalSections');

Route::get('blog-sections', PostSections::class)
    ->middleware(['auth', 'verified'])
    ->name('blogSections');

Route::get('blog-sections/create', PostForms::class)
    ->middleware(['auth', 'verified'])
    ->name('blogSections.create');

Route::get('blog-sections/{post}/edit', PostForms::class)
    ->middleware(['auth', 'verified'])
    ->name('blogSections.edit');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    /* Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit'); */
});






require __DIR__.'/auth.php';
