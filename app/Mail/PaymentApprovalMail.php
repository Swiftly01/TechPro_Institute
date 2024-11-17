<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PaymentApprovalMail extends Mailable
{
    use Queueable, SerializesModels;



    /**
     * Create a new message instance.
     */

     public $firstName;
     public $lastName;
     public $email;
     public $course;
     public $phone;
     public $app_no;
     public $payment_reference;
     public $amount;
    

    public function __construct($firstName, $lastName, $email, $course, $phone, $app_no, $payment_reference, $amount )
    {
        
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->course = $course;
        $this->phone = $phone;
        $this->app_no = $app_no;
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
            subject: 'Payment :: Approval',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'application.paymentapproval',
            with: [
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'email' => $this->email,
                'course' => $this->course,
                'phone' => $this->phone,
                'app_no' => $this->app_no,
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
