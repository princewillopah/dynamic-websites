<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Job extends Model
{
    use HasFactory;
    protected $dates = ['due_date',];
    
 
    public function getFormattedDateAttribute()	//accessor to transform amount 	 
    {	 	 
       return date_format($this->due_date,'F d, Y') ;
    }
    public static function formattedDate($date)	//accessor to transform amount 	 
    {	 	 
       return date_format($date,'F d, Y');
    }

//    public static function getUsers(){
//     //    $jobs = DB::table('jobs');
//     $jobs = Job::paginate(10);

//        return $jobs;
//    }


    public function applicants(){
        return $this->hasMany(Applicant::class);
    }

    public function industry(){
        return $this->belongsTo(Industry::class);
    }
    public function location(){
        return $this->belongsTo(Location::class);
    }
}
