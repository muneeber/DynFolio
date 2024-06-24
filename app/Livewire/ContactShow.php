<?php

namespace App\Livewire;

use App\Models\ContactUs;
use Livewire\Component;

class ContactShow extends Component
{
    public $modal=false;
    public $messages;
    public $subject;
    public $details;
    public $messageId;
    public function mount(){

    $this->messages=ContactUs::all()->sortByDesc('created_at');
    // dd($this->messages);

    }
    public function showMes($id){
        $this->subject=ContactUs::find($id)->subject;
        $this->details=ContactUs::find($id)->details;
        $this->messageId=$id;
        
        $this->modal=true;
    }

    public function closeModal(){
    $this->modal=false;
    }
    public function readMessage($id){
        $message=ContactUs::find($id);
        $message->hasRead=1;
        $message->save();
        $this->closeModal();
        $this->messages=ContactUs::all()->sortByDesc('created_at');
    
    }

    public function render()
    {
        return view('livewire.contact-show');
    }
}
