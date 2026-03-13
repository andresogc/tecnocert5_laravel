<?php

namespace App\Livewire\MainPage\Forms;

use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Log;

class ContactForm extends Component
{   
    public $name;
    public $email;
    public $subject;
    public $message;
    public $acceptPolicies = false;

    protected $rules = [
        'name' => 'required|string|max:100',
        'email' => 'required|email|max:150',
        'subject' => 'required',
        'message' => 'required',
        'acceptPolicies' => 'accepted'
    ];

    public function send()
    {   
        try {

            $this->validate();

            // aquí envia el correo con Brevo
            Mail::to(config('mail.forms.contact'))
            ->send(new ContactFormMail(
                $this->name,
                $this->email,
                $this->subject,
                $this->message
            ));


            $this->dispatch('toast',
                message: 'Mensaje enviado correctamente',
                type: 'success',
                form: 'contact'
            );

            $this->reset();

        } catch (ValidationException $e) {

            $this->dispatch('toast',
                message: 'Por favor complete todos los campos obligatorios.',
                type: 'error',
                form: 'contact'
            );

            throw $e; // mantiene los errores en los inputs
        }catch (\Exception $e) {
           Log::error('Error enviando formulario', [
                'exception' => $e
            ]);


            $this->dispatch('toast',
                message: 'Error enviando el mensaje. Intente nuevamente más tarde.',
                type: 'error',
                form: 'contact'
            );

        }

    }

    public function render()
    {
        return view('livewire.main-page.forms.contact-form');
    }
}
