<?php

namespace App\Mail;

use App\Models\Proposition;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PropositionConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Proposition $proposition)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Confirmation de réception de votre proposition - MBRC',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.proposition-confirmation',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
