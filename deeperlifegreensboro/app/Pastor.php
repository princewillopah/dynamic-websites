<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pastor extends Model
{

    protected $fillable = ['title','name','slug', 'description','phone', 'facebook','pic','twitter','instagram'];


    public function sermons(){
        return $this->hasMany(Sermon::class);
    }
}
