<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
// use App\Models\ContactForm as ContactForms;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;
    
    protected $rules = [
        'name' => 'required|min:1',
        'email' => 'required|email',
        'message' => 'required|min:1'
    ];

    public function sendContactForm(){
        $this->validate();

        $details = [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        ];
        Mail::to('info@ievicon.com')->send(new ContactFormMail($details));
        session()->flash('success','We will get back to you shortly.');
        $this->reset();

    }

    public function render()
    {
        return view('livewire.contact-form');
    }






}
