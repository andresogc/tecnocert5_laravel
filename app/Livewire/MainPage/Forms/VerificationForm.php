<?php

namespace App\Livewire\MainPage\Forms;

use App\Mail\VerificationFormMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class VerificationForm extends Component
{   

    public $numero_certificado;
    public $nombre_empresa;
    public $norma_certificada;
    public $correo;
    public $comentarios;

     protected $rules = [
        'numero_certificado' => 'required|max:200',
        'nombre_empresa' => 'required|max:200',
        'norma_certificada' => 'required',
        'correo' => 'required|email|max:150',
        'comentarios' => 'nullable|max:1500'
    ];

      public function send()
    {   
        try {

            $this->validate();

            // aquí envia el correo con Brevo
            Mail::to(config('mail.forms.contact'))
            ->send(new VerificationFormMail(
                $this->numero_certificado,
                $this->nombre_empresa,
                $this->norma_certificada,
                $this->correo,
                $this->comentarios
            ));


            $this->dispatch('toast',
                message: 'Mensaje enviado correctamente',
                type: 'success',
                form: 'verification'
            );

            $this->reset();

        } catch (ValidationException $e) {

            $this->dispatch('toast',
                message: 'Por favor complete todos los campos obligatorios.',
                type: 'error',
                form: 'verification'
            );

            throw $e; // mantiene los errores en los inputs
        }catch (\Exception $e) {
           Log::error('Error enviando formulario', [
                'exception' => $e
            ]);


            $this->dispatch('toast',
                message: 'Error enviando el mensaje. Intente nuevamente más tarde.',
                type: 'error',
                form: 'verification'
            );

        }

    }


    public function render()
    {
        return view('livewire.main-page.forms.verification-form');
    }
}
