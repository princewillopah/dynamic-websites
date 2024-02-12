<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\CourseRegistrationForm as CourseRegistrationForms;
use Illuminate\Support\Facades\Mail;
use App\Models\Course;

class CourseRegistrationForm extends Component
{
    // public $currentPage = 1;
    public $courses;//

    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $proposedDate;
    public $courseCategories = [];//array;

    protected $rules = [
        'firstName' => 'required|min:1',
        'email' => 'required|email',
        'courseCategories' => 'array|min:1',
        'proposedDate' =>'required|date'
    ];

    public function submit(){
        $this->validate();

        $details = [
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'phone' => $this->phone,
            'email' => $this->email,
            'courseCategories' => $this->courseCategories,
            'proposedDate' => $this->proposedDate
        ];
        // dd($details);
        Mail::to('info@ievicon.com')->send(new CourseRegistrationForms($details));
        session()->flash('success','We will get back to you shortly.');
        $this->reset();

    }

    public function render()
    {
        // $this->courses =  Course::all()->groupBy('category_id');
        $this->courses =  Course::select('category_id','title')->get();
        return view('livewire.course-registration-form');
    }
}
