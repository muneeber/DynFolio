<?php

namespace App\Livewire;

use App\Models\Project;
use App\Models\ProjectCategory;
use Livewire\Component;

class Projects extends Component
{
    public $projects;
    public function mount(){
     $this->projects=ProjectCategory::find(1)->projects;

    }
    public function render()
    {
        return view('livewire.projects');
    }
}
