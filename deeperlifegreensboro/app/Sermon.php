<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    // protected $dates = ['sermonDate','startTime','endTime'];
    protected $dates = ['sermonDate',];
    protected $fillable = ['title', 'description', 'coverImage','startTime','sermonDate','endTime','slug','vidioLink','audioLink','category_id','pastor_id'];


    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function pastor(){
        return $this->belongsTo(Pastor::class);
    }
}
