<?php

namespace App\Livewire\MainPage\Forms;

use App\Mail\CotizacionFormMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class CotizacionForm extends Component
{   

    public $name;
    public $email;
    public $phone;
    public $message;
    
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',
    ];


     public function send()
    {   
        try {

            $this->validate();

            // aquí envia el correo con Brevo
            Mail::to(config('mail.forms.cotizacion'))
            ->send(new CotizacionFormMail(
                $this->name,
                $this->email,
                $this->phone,
                $this->message
            ));


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
