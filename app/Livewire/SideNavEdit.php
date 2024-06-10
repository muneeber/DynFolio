<?php

namespace App\Livewire;

use App\Models\SideNavLink;
use Livewire\Component;

class SideNavEdit extends Component
{
    public $links;
    public $name;
    public $url;
    public $enabled = true;

    public function mount()
    {
        $this->links = SideNavLink::all();
    }

    public function addLink()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'enabled' => 'required|boolean',
        ]);

        SideNavLink::create([
            'name' => $this->name,
            'url' => $this->url,
            'enabled' => $this->enabled,
        ]);

        $this->resetForm();
        $this->mount(); // Refresh links
    }

    public function toggleLink($id)
    {
        $link = SideNavLink::find($id);
        $link->enabled = !$link->enabled;
        $link->save();

        $this->mount(); // Refresh links
    }

    public function deleteLink($id)
    {
        SideNavLink::find($id)->delete();

        $this->mount(); // Refresh links
    }

    private function resetForm()
    {
        $this->name = '';
        $this->url = '';
        $this->enabled = true;
    }

    public function render()
    {
        return view('livewire.side-nav-edit');
    }
}

