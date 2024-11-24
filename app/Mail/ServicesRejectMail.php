<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ServicesRejectMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $firstName;
    public $lastName;
    public $email;
    public $service;
    public $phone;
    public $reason;

    public function __construct($firstName, $lastName,  $email, $service, $phone,  $reason)
    {
        
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->service = $service;
        $this->phone = $phone;
        $this->reason = $reason;
        
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from:new Address(env('MAIL_FROM_ADDRESS')),
            subject: 'Service :: Approval Failed',
        );
    }
    

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'application.serviceReject',
            with: [
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'email' => $this->email,
                'course' => $this->service,
                'phone' => $this->phone,
                'reason' => $this->reason,
                
                
                
            ],
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
