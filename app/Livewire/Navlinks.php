<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Sidelink;

class Navlinks extends Component
{
    public $navlinks;
    public function mount(){
        $this->getData();
    }

    public function getData(){
        $this->navlinks = Sidelink::all();
    }
    public function render()
    {
        return view('livewire.navlinks');
    }
}
