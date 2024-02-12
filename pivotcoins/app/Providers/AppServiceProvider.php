<?php

namespace App\Providers;
use App\Deposit;
use App\User;
use App\Withdrawal;
use Carbon\Carbon;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //  view()->composer('cart.cart',function ($view){
        //    $view->with('categories', Category::all());
        //    ->with('allCategory', Category::all()->count());
        // });
     view()->composer('layouts.admin',function ($view){
         $view->with('deposits', Deposit::all()->count())
           ->with('withdrawals', Withdrawal::all()->count())
           ->with('users', User::all()->count());
     });

     // -----email----------------------------------------------------------


      // VerifyEmail::toMailUsing(function ($notifiable) {
      //       $verifyUrl = URL::temporarySignedRoute(
      //           'verification.verify', Carbon::now()->addMinutes(60), ['id' => $notifiable->getKey()]
      //       );

      //       return (new MailMessage)
      //           ->subject('Welcome!')
      //           ->markdown('emails.view.verification', ['url' => $verifyUrl]);
      //   });

      // VerifyEmail::toMailUsing(function ($notifiable){
      //       $verifyUrl = URL::temporarySignedRoute(
      //           'verification.verify',
      //           Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
      //           [
      //               'id' => $notifiable->getKey(),
      //               'hash' => sha1($notifiable->getEmailForVerification()),
      //           ]
      //       );

      //       $user = User::whereEmail($notifiable->getEmailForVerification())->first();
      //       return (new MailMessage)
      //           ->subject('Welcome!')
      //           ->markdown('emails.view.verification', ['user' => $user, 'verifyUrl' => $verifyUrl]);
      //   });




    }
}
