<?php

namespace App\Livewire\MainPage\Forms;

use App\Mail\SuscribeFormMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class SuscribeForm extends Component
{   
    public $email;

     protected $rules = [
        'email' => 'required|email',
    ];

    public function send()
    {   
        try {

            $this->validate();

            // aquí envia el correo con Brevo
            Mail::to(config('mail.forms.suscribe'))
            ->send(new SuscribeFormMail(
                $this->email,
            ));


            $this->dispatch('toast',
                message: 'Mensaje enviado correctamente',
                type: 'success',
                form: 'suscription'
            );

            $this->reset();

        } catch (ValidationException $e) {

            $this->dispatch('toast',
                message: 'Por favor complete todos los campos obligatorios.',
                type: 'error',
                form: 'suscription'
            );

            throw $e; // mantiene los errores en los inputs
        }catch (\Exception $e) {
           Log::error('Error enviando formulario', [
                'exception' => $e
            ]);


            $this->dispatch('toast',
                message: 'Error enviando el mensaje. Intente nuevamente más tarde.',
                type: 'error',
                form: 'suscription'
            );

        }

    }

    public function render()
    {
        return view('livewire.main-page.forms.suscribe-form');
    }
}
