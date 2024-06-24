<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactUs;

class Contact extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone_number;
    public $details;
    public $subject;

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone_number' => 'nullable|string|max:15',
        'details' => 'required|string',
        'subject' => 'required|string',
    ];

    public function submit()
    {
        $validatedData = $this->validate();
        // dd($validatedData);

        ContactUs::create($validatedData);

        session()->flash('success', 'Contact message sent successfully!');

        $this->reset();
    }

    
    public function render()
    {
        return view('livewire.contact');
    }
}
