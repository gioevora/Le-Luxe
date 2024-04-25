<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactMessage;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public $message;

    /**
     * Create a new message instance.
     *
     * @param ContactMessage $contact The contact message instance
     * @param string $message The message content
     */
    public function __construct(ContactMessage $contact, $message)
    {
        $this->contact = $contact;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('inorganicdrake@gmail.com')
                    ->markdown('emails.contact')
                    ->subject('Contact Inquiries')
                    ->with([
                        'message' => $this->message,
                    ]);
    }
}
