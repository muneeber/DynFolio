<?php

namespace App\Livewire;

use App\Models\SmallProject;
use Livewire\Component;

class SmallProjects extends Component
{
    public $projects;
    public function mount(){
        $this->projects = SmallProject::all();
    }
    public function render()
    {
        return view('livewire.small-projects');
    }
}
