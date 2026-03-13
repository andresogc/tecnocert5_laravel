<?php

use App\Livewire\Admin\Customers\Customers;
use App\Livewire\Admin\ManageSite\HomeSections;
use App\Livewire\Admin\ManageSite\LegalSections;
use App\Livewire\Admin\ManageSite\PostForms;
use App\Livewire\Admin\ManageSite\PostSections;
use App\Livewire\MainPage\MainPages;
use Illuminate\Support\Facades\Route;


/**rutas pagina principal de tecnocert  (publica)*/
Route::get('/', MainPages::class)->name('index');
Route::get('/iso9001', MainPages::class)->name('iso9001')->defaults('page', 'iso9001');
Route::get('/gap_analisis', MainPages::class)->name('gap_analisis')->defaults('page', 'gap_analisis');
Route::get('/auditoria_interna', MainPages::class)->name('auditoria_interna')->defaults('page', 'auditoria_interna');
Route::get('/capacitacion', MainPages::class)->name('capacitacion')->defaults('page', 'capacitacion');
Route::get('/blog', MainPages::class)->name('blog')->defaults('page', 'blog');
Route::get('/work', MainPages::class)->name('work')->defaults('page', 'work');
Route::get('/contact', MainPages::class)->name('contact')->defaults('page', 'contact');
Route::get('/questions', MainPages::class)->name('questions')->defaults('page', 'questions');



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
