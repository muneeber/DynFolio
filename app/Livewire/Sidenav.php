<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Sidelink;
use App\Models\SideNavLink;
use App\Models\Social;

class SideNav extends Component
{
    public $links;
    public $socials;

    public function mount(){
        $this->getData();
    }

    public function getData(){
        $this->links = Sidelink::where('status', 1)->get();
        $this->socials= Social::where('status', 1)->get();
    }
    public function render()
    {
        return view('livewire.sidenav');
    }
}
