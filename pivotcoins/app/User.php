<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
// class User extends Authenticatable
{
    use Notifiable;

    
    protected $fillable = [
        'name', 'lastname', 'admin', 'email', 'password','walletId','phone_number',
        // 'name', 'lastname', 'admin', 'email', 'password','walletId','phono','phote',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function next_of_kin(){
        return $this->hasOne('App\Nextofkin');
    }
  
    public function withdrawals(){
        return $this->hasMany('App\Withdrawal');
    }
    public function deposits(){
         return $this->hasMany('App\Deposit');
        // return $this->hasMany('App\Deposit')->withDefault(['deposit_amount' => 21]);
    }
}
