<?php

namespace App\Mail;

use App\Deposit;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PayoutFormMail extends Mailable implements ShouldQueue
{
    // use Queueable, SerializesModels;
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

     public $user;
      public $deposit;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user, Deposit $deposit)
    {
        $this->user = $user;
        $this->deposit = $deposit;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->markdown('emails.payout.payout-form');
        return $this->view('emails.payout.payout-form');
        // ->with('user',$user);
    }
}
