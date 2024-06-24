<?php

namespace App\Livewire;

use App\Models\Social;
use Livewire\Component;

class Socials extends Component
{
    public $socials;
    public function mount(){
        $this->getData();
    }
    public function getData(){
        $this->socials = Social::all();
    }
    public function render()
    {
        return view('livewire.socials');
    }
}
