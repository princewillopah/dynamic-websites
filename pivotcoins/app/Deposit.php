<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Notifications\Notifiable;

class Deposit extends Model
{
   // use Notifiable;
	
    protected $fillable = [
        'user_id','deposit_amount',
   ];

   public function user(){
    return $this->belongsTo('App\User');
}
}
