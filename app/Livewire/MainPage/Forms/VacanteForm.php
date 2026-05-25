<?php

namespace App\Livewire\MainPage\Forms;

use App\Mail\VacanteFormMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;

class VacanteForm extends Component
{   

    use WithFileUploads;

    protected $listeners = ['setVacanteData'];

    public $name;
    public $last_name;
    public $phone;
    public $email;
    public $observation;
    public $cv_file;

    public $vacanteId;
    public $vacanteTitle;

    protected $rules = [
        'name' => 'required|string|max:100',
        'last_name' => 'required|string|max:100',
        'phone' => 'required|string|max:30',
        'email' => 'required|email|max:150',
        'observation' => 'nullable|string|max:2000',
        'cv_file' => 'required|file|mimes:pdf|max:2048'
    ];

    public function setVacanteData($id, $title)
    {   
        $this->vacanteId = $id;
        $this->vacanteTitle = $title;
    }

    public function send()
    {   
        try {
            
            $this->validate();

            // aquí envia el correo con Brevo
            Mail::to(config('mail.forms.contact'))
            ->send(new VacanteFormMail(
                $this->name,
                $this->last_name,
                $this->phone,
                $this->email,
                $this->observation,
                $this->cv_file,
                $this->vacanteTitle
            ));


            $this->dispatch('toast',
                message: 'Postulación enviada correctamente',
                type: 'success',
                form: 'vacante'
            );

            $this->reset();

        } catch (ValidationException $e) {

            $this->dispatch('toast',
                message: 'Por favor complete todos los campos obligatorios.',
                type: 'error',
                form: 'vacante'
            );

            throw $e; // mantiene los errores en los inputs
        }catch (\Exception $e) {
            Log::error('Error enviando formulario', [
                'exception' => $e
            ]);


            $this->dispatch('toast',
                message: 'Error enviando el mensaje. Intente nuevamente más tarde.',
                type: 'error',
                form: 'vacante'
            );

        }

    }

   

    public function render()
    {
        return view('livewire.main-page.forms.vacante-form');
    }
}
