<?php

namespace App\Mail;

use App\Models\ManifesteDownload;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ManifesteDownloadEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public ManifesteDownload $download)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Votre Manifeste MBRC',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.manifeste-download',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
