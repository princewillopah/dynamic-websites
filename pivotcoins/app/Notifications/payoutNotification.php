<?php

namespace App\Notifications;

use App\Deposit;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class payoutNotification extends Notification implements ShouldQueue
{
    // use Queueable;
     use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 1; // Laravel should notice this and set a retry limit on a per-job basis. Handy if you don't want some jobs to auto-retry at all, but want some other jobs to retry a set amount of times.

     public $user;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

 // public function __construct()
 //    {
        
 //    }
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable, 
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // return (new MailMessage)->view('emails.view.payout',['user'=>$deposit->user, 'deposit'=>$deposit]);
      return (new MailMessage)
               // ->view('emails.view.payout',['user'=>$user]);
     // return (new MailMessage)->view('emails.view.payout')
                         ->line('prince to the notification.')
                      ->action('Notification Action', url('/'))
     //                     ->action('Notification Action', route('all.deposits'))
                         ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
