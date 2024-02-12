<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CourseRegistrationForm extends Mailable
{
    use Queueable, SerializesModels;
    public $detail;


   public function __construct($data)//$data is detail array sent from controller
    {
        $this->detail = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->detail['email'])
        ->subject('New Course Registration')
        ->view('emails.CourseRegistrationForm');
    }
}
