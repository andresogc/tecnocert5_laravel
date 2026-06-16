<?php

namespace App\Livewire\MainPage\Forms;

use App\Mail\CotizacionFormMail;
use App\Services\BrevoMailService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class CotizacionForm extends Component
{   

    public $name;
    public $email;
    public $phone;
    public $messageText;
    
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'messageText' => 'required',
    ];


     public function send()
    {   
        try {

            $this->validate();

            // aquí envia el correo con Brevo
          /*   Mail::to(config('mail.forms.cotizacion'))
            ->send(new CotizacionFormMail(
                $this->name,
                $this->email,
                $this->phone,
                $this->messageText
            )); */

            $emails = config('mail.forms.cotizacion');

            $to = array_map(function ($email) {
                return ['email' => $email];
            }, $emails);

             $brevo = app(BrevoMailService::class);

            $brevo->send(
                $to,
                'SOLICITUD DE COTIZACIÓN - TECNOCERT',
                view('livewire.main-page.emails.cotizacion-form', [
                    'name' => $this->name,
                    'email' => $this->email,
                    'phone' => $this->phone,
                    'messageText' => $this->messageText,
                ])->render()
            );

            $this->dispatch('toast',
                message: 'Mensaje enviado correctamente',
                type: 'success',
                form: 'cotizacion'
            );

            $this->reset();

        } catch (ValidationException $e) {

            $this->dispatch('toast',
                message: 'Por favor complete todos los campos obligatorios.',
                type: 'error',
                form: 'cotizacion'
            );

            throw $e; // mantiene los errores en los inputs
        }catch (\Exception $e) {
           Log::error('Error enviando formulario', [
                'exception' => $e
            ]);


            $this->dispatch('toast',
                message: 'Error enviando el mensaje. Intente nuevamente más tarde.',
                type: 'error',
                form: 'cotizacion'
            );

        }

    }

    public function render()
    {
        return view('livewire.main-page.forms.cotizacion-form');
    }
}
