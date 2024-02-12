<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\DownloadCarlendarForm;
use Illuminate\Support\Facades\Mail;

class DownloadCalendarForm extends Component
{
    public $name;
    public $company;
    public $state;
    public $email;
    public $phone;

 
    protected $rules = [
        'name' => 'required|min:1',
        'company' => 'required',
        'state' => 'required',
        'email' => 'required|email',
        // 'phone' =>'required'
    ];

    public function submit(){
        $this->validate();

        $details = [
            'name' => $this->name,
            'company' => $this->company,
            'phone' => $this->phone,
            'email' => $this->email,
            'state' => $this->state
        ];
        // dd($details);
        Mail::to('info@ievicon.com')->send(new DownloadCarlendarForm($details));
        session()->flash('success','Thank You. You can dow proceed to download our calendar');
        // $this->reset();
        return redirect()->to('/download-calendar-for-this-year');
        
        

    }

    public function render()
    {
        return view('livewire.download-calendar-form');
    }

   


}
