<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContacUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $adminName;
    public $contactEmail;
    public $contactDesc;

    /**
     * Create a new message instance.
     */
    public function __construct($adminName, $contactEmail, $contactDesc)
    {
        $this->adminName = $adminName;
        $this->contactEmail = $contactEmail;
        $this->contactDesc = $contactDesc;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from:new Address(env('MAIL_FROM_ADDRESS')),
            subject: 'Contact Us :: Notification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'application.contact-us-mail',
            with: [
                'adminName' => $this->adminName,
                 'contactEmail' => $this->contactEmail,
                 'contactDesc' => $this->contactDesc,
            ]
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
