<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    
    protected $fillable = [
        'user_id','withdrwal_amount',
     ];

   public function user(){
       return $this->belongsTo('App\User');
   }
}
