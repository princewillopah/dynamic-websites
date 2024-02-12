<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Spatie\MediaLibrary\HasMedia;
// use Spatie\MediaLibrary\InteractsWithMedia;

class Course extends Model 
{
    use HasFactory;
    
    public function getFormatedAmountAttribute()	//accessor to transform amount 	 
        {	 	 
            // return $this->first_name . " " . $this->last_name;	 
            return  '₦'.number_format($this->amount, 0, '.', ',');
        }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function format(){
        return $this->belongsTo(Format::class);
    }
}
