<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $dates = ['eventStartDate','eventEndDate'];
    protected $fillable = ['title', 'description', 'image','place','eventStartDate','eventEndDate','slug',];
}
