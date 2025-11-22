<?php

namespace App\Mail;

use App\Models\Proposition;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PropositionReceived extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Proposition $proposition)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nouvelle proposition de soutien - MBRC',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.proposition-received',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
