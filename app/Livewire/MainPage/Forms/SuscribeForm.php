<?php

namespace App\Livewire\MainPage\Forms;

use App\Mail\SuscribeFormMail;
use App\Services\BrevoMailService;
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
           /*  Mail::to(config('mail.forms.suscribe'))
            ->send(new SuscribeFormMail(
                $this->email,
            )); */

            $emails = config('mail.forms.suscribe');
    
            $to = array_map(function ($email) {
                return ['email' => $email];
            }, $emails);
    
            $brevo = app(BrevoMailService::class);
            
            $brevo->send(
                $to,
                'SOLICITUD DE SUSCRIPCIÓN - TECNOCERT',
                view('livewire.main-page.emails.suscribe-form', [
                    'email' => $this->email,
                ])->render()
            );

        
            $this->dispatch('toast',
                message: 'Mensaje enviado correctamente',
                type: 'success',
                form: 'suscribe'
            );

            $this->reset();

        } catch (ValidationException $e) {

            $this->dispatch('toast',
                message: 'Por favor complete todos los campos obligatorios.',
                type: 'error',
                form: 'suscribe'
            );

            throw $e; // mantiene los errores en los inputs
        }catch (\Exception $e) {
           Log::error('Error enviando formulario', [
                'exception' => $e
            ]);


            $this->dispatch('toast',
                message: 'Error enviando el mensaje. Intente nuevamente más tarde.',
                type: 'error',
                form: 'suscribe'
            );

        }

    }

    public function render()
    {
        return view('livewire.main-page.forms.suscribe-form');
    }
}
