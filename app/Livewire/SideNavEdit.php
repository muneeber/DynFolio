<?php

namespace App\Livewire;

use App\Models\Social;
use Livewire\Component;
use App\Models\Sidelink;
use App\Models\SideNavLink;

class SideNavEdit extends Component
{
    public $modal = false;

    public $links;
    public $socials;

    public $title;
    public $link;
    public $svg_icon;
    public $editLink;

    public function mount()
    {
        $this->getData();
    }

    public function disableLink($id)
    {
        $link = Sidelink::find($id);
        $link->status = 0;
        $link->save();
        $this->getData();
    }
    public function enableLink($id)
    {
        $link = Sidelink::find($id);
        $link->status = 1;
        $link->save();
        $this->getData();
    }

    public function createLink()
    {
        $this->validate([
            'title' => 'required',
            'link' => 'required',
            'svg_icon' => 'required',
        ]);
        $link = Sidelink::create([
            'Title' => $this->title,
            'link' => $this->link,
            'svg_icon' => $this->svg_icon,
            'status' => 1,
        ]);
        $this->rest();
        $this->getData();
        $this->closeModal();
    }
    public function rest()
    {
        $this->title = '';
        $this->link = '';
        $this->svg_icon = '';
    }

    public function deleteLink($id)
    {
        $link = Sidelink::find($id);
        $link->delete();
        $this->getData();
    }
    public function modelOpen()
    {
        $this->modal = true;
    }
    public function closeModal()
    {
        $this->modal = false;
        $this->rest();
    }


    public function edit($id)
    {
        $link = Sidelink::find($id);
        $this->title = $link->Title;
        $this->link = $link->link;
        $this->svg_icon = $link->svg_icon;
        $this->editLink = $link;
        $this->modelOpen();
    }
    public function updateLink()
    {
        $this->validate([
            'title' => 'required',
            'link' => 'required',
            'svg_icon' => 'required',
        ]);
        $this->editLink->update([
            'Title' => $this->title,
            'link' => $this->link,
            'svg_icon' => $this->svg_icon,
        ]);
        $this->rest();
        $this->getData();
        $this->closeModal();
    }
    public function getData()
    {
        $this->links = Sidelink::all();
        $this->socials = Social::all();
    }

    public function disableSocial($id)
    {
        $social = Social::find($id);
        $social->status = 0;
        $social->save();
        $this->getData();
    }

    public function enableSocial($id)
    {
        $social = Social::find($id);
        $social->status = 1;
        $social->save();
        $this->getData();
    }

    public function createSocial()
    {
        $this->validate([
            'title' => 'required',
            'link' => 'required',
            'svg_icon' => 'required',
        ]);
        $social = Social::create([
            'Title' => $this->title,
            'link' => $this->link,
            'svg_icon' => $this->svg_icon,
            'status' => 1,
        ]);
        $this->rest();
        $this->getData();
        $this->closeModal();
    }

    public function editSocial($id)
    {
        $social = Social::find($id);
        $this->title = $social->Title;
        $this->link = $social->link;
        $this->svg_icon = $social->svg_icon;
        $this->editLink = $social;
        $this->modelOpen();
    }

    public function updateSocial()
    {
        $this->validate([
            'title' => 'required',
            'link' => 'required',
            'svg_icon' => 'required',
        ]);
        $this->editLink->update([
            'Title' => $this->title,
            'link' => $this->link,
            'svg_icon' => $this->svg_icon,
        ]);
        $this->rest();
        $this->getData();
        $this->closeModal();
    }

    public function deleteSocial($id)
    {
        $social = Social::find($id);
        $social->delete();
        $this->getData();
    }


    public function render()
    {
        return view('livewire.side-nav-edit');
    }
}
