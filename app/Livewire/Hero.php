<?php

namespace App\Livewire;

use App\Models\Icon;
use App\Models\Setting;
use Livewire\Component;

class Hero extends Component
{
    public $name;
    public $handle;
    public $cta;
    public $header_image;
    public $header_icon;
    public function mount(){
        $this->name=Setting::where('key', 'name')->first()->value;
        $this->handle=Setting::where('key', 'handle')->first()->value;
        $this->cta=Setting::where('key', 'cta')->first()->value;
        $this->header_image=Setting::where('key', 'header_image')->first()->value;
        $this->header_icon=Icon::find(Setting::where('key', 'header_icon')->first()->value)->svg_code;
        

    }
    public function render()
    {
        return view('livewire.hero');
    }
}
