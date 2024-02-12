<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    use HasFactory;
    // protected $fillable = ['name',];
    public function setNameAttribute($value) {
        $this->attributes['name'] = ucfirst($value);
    }

    public function courses(){
        return $this->hasMany(Course::class);
    }
}