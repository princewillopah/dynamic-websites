<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public function setNameAttribute($value) {
        $this->attributes['name'] = ucfirst($value);
    }
    
    public function jobs(){
        return $this->hasMany(Job::class);
    }
}
