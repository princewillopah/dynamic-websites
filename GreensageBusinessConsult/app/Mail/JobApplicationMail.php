<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplicationMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $name = $this->data['name'];
        return $this->from($this->data['email'])
                          ->subject('New Job Application')
                          ->view('emails.JobApplicationMail')
                          ->with('data',$this->data)
                          ->attach($this->data['cv']->getRealPath(), [
                                                'as' => $this->data['cv']->getClientOriginalName(),
                                                'mime' => $this->data['cv']->getClientMimeType(),
                                        ]);
    }
}



// public function build()
// {
//     return $this->from($this->data['email'])
//                       ->subject('New Job Application')
//                       ->view('emails.JobApplicationMail')
//                     ->attach($this->data['cv']->getRealPath(), [
//                                             // 'as' => $this->data['cv']->getClientOriginalName(),
//                                             // 'mime' => $this->data['cv']->getClientMimeType(),
//                                             'mime' => 'application/pdf',
//                                     ]);
// }