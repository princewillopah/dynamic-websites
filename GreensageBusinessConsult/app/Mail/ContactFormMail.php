<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;
    public $detail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)//$data is detail array sent from controller
    {
        $this->detail = $data;
    }

   
    public function build()
    {
        return $this->from($this->detail['email'])
                        ->subject('New Contact Message')
                        ->view('emails.ContactFormMail');
    }
}
