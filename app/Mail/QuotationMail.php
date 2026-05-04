<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QuotationMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Contact $quotation)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Quotation Request from ' . $this->quotation->full_name,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.quotation',
        );
    }
}
