<?php

namespace App\Livewire;

use App\Models\Setting;
use Livewire\Component;

class FooterEdit extends Component
{
    public $ftTitle;
    public $ftUsername;
    public $ftIcon;
    public $ftText;
    public $ftLink;


    
    public $title;
    public $username;
    public $icon;
    public $text;
    public $link;



    public $modal=false;
    public function mount(){
       $this->getData();
    }


    public function closeModal(){
        $this->modal=false;
        $this->rest();
    }
    public function getData(){
        $this->ftTitle = Setting::where('key','ftTitle')->first()->value;
        $this->ftUsername = Setting::where('key','ftUsername')->first()->value;
        $this->ftIcon = Setting::where('key','ftIcon')->first()->value;
        $this->ftText = Setting::where('key','ftText')->first()->value;
        $this->ftLink = Setting::where('key','ftLink')->first()->value;
    }

    public function modelOpen(){
    $this->modal=true;
    }

    public function rest(){
        $this->title='';
        $this->username='';
        $this->icon='';
        $this->text='';
        $this->link='';
    }
    public function saveChanges(){
        // dd($this->title,$this->username,$this->icon,$this->text,$this->link);
     
        $this->validate([
            'title' => 'required',
            'username' => 'required',
            'icon' => 'required',
            'text' => 'required',
            'link' => 'required',
        ]);
        Setting::where('key','ftTitle')->update(['value'=>$this->title]);
        Setting::where('key','ftUsername')->update(['value'=>$this->username]);
        Setting::where('key','ftIcon')->update(['value'=>$this->icon]);
        Setting::where('key','ftText')->update(['value'=>$this->text]);
        Setting::where('key','ftLink')->update(['value'=>$this->link]);
        $this->getData();
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.footer-edit');
    }
}
