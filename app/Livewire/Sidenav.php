<?php

namespace App\Livewire;

use App\Models\SideNavLink;
use Livewire\Component;

class SideNav extends Component
{
    public $links;

    public function mount()
    {
        $this->links = SideNavLink::with('icon')->where('enabled', true)->get();
    }

    public function render()
    {
        return view('livewire.sidenav');
    }
}
