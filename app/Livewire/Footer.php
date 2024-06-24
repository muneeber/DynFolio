<?php

namespace App\Livewire;

use App\Models\Setting;
use Livewire\Component;

class Footer extends Component
{
    public $ftTitle;
    public $ftUsername;
    public $ftIcon;
    public $ftText;
    public $ftLink;
    public function mount(){

    $this->ftTitle = Setting::where('key','ftTitle')->first()->value;
    $this->ftUsername = Setting::where('key','ftUsername')->first()->value;
    $this->ftIcon = Setting::where('key','ftIcon')->first()->value;
    $this->ftText = Setting::where('key','ftText')->first()->value;
    $this->ftLink = Setting::where('key','ftLink')->first()->value;

    }
    public function render()
    {
        return view('livewire.footer');
    }
}
