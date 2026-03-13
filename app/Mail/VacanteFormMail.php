<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VacanteFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $last_name;
    public $phone;
    public $email;
    public $observation;
    public $cv_file;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $last_name, $phone, $email, $observation, $cv_file)
    {
        $this->name = $name;
        $this->last_name = $last_name;
        $this->phone = $phone;
        $this->email = $email;
        $this->observation = $observation;
        $this->cv_file = $cv_file;
    }

   
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'SOLICITUD DE VACANTE - AUDITOR FREELANCE ISO 9001 -  TECNOCERT',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'livewire.main-page.emails.vacante-form',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath($this->cv_file->getRealPath())
                ->as($this->cv_file->getClientOriginalName())
                ->withMime($this->cv_file->getMimeType()),
        ];
    }
}
