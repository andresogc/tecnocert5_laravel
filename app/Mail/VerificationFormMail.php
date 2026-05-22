<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VerificationFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $numero_certificado;
    public $nombre_empresa;
    public $norma_certificada;
    public $correo;
    public $comentarios;


    /**
     * Create a new message instance.
     */
    public function __construct(    
        $numero_certificado,
        $nombre_empresa,
        $norma_certificada,
        $correo,
        $comentarios
    )
    {
        $this->numero_certificado = $numero_certificado;
        $this->nombre_empresa = $nombre_empresa;
        $this->norma_certificada = $norma_certificada ?? 'No especificada';
        $this->correo = $correo ?? 'No especificado';
        $this->comentarios = $comentarios;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Solicitud de Verificación de Certificado',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'livewire.main-page.emails.verification-form',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
