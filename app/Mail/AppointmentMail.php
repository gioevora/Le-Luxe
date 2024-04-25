<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Appointment;

class AppointmentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $appointment;
    public $message;

    public function __construct(Appointment $appointment, $message)
    {
        $this->appointment = $appointment;
        $this->message = $message;
    }

    public function build()
    {
        return $this->from('inorganicdrake@gmail.com') // Update with your email address
                    ->markdown('emails.appointment')
                    ->subject('Booking Inquiries')
                    ->with([
                        'message' => $this->message,
                    ]);
    }
}
