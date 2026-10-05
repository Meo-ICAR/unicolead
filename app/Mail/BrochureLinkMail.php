<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BrochureLinkMail extends Mailable
{
    use Queueable, SerializesModels;

    public \App\Models\Lead $lead;

    /**
     * Create a new message instance.
     */
    public function __construct(\App\Models\Lead $lead)
    {
        $this->lead = $lead;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Brochure Personalizzata - UnicoCompliance',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.brochure_link',
            with: [
                'url' => url('/b/' . $this->lead->token),
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
