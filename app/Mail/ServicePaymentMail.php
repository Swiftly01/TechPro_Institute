<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ServicePaymentMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    
     
     public $firstName;
     public $lastName;
     public $email;
     public $services;
     public $phone;
     public $inv;
     public $payment_reference;
     public $amount;
    
     public function __construct($firstName, $lastName, $email, $services, $phone, $inv, $payment_reference, $amount ) {

        
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->services = $services;
        $this->phone = $phone;
        $this->inv= $inv;
        $this->payment_reference =$payment_reference;
        $this->amount = $amount;


     }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from:new Address(env('MAIL_FROM_ADDRESS')),
            subject: 'Service Payment :: Approval',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'application.servicepaymentapproval',
            with: [
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'email' => $this->email,
                'services' => $this->services,
                'phone' => $this->phone,
                'inv' => $this->inv,
                'payment_reference' => $this->payment_reference,
                'amount' => $this->amount,
                
                
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
