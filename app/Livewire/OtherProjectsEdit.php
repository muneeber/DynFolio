<?php

namespace App\Livewire;

use App\Models\ProjectCategory;
use Livewire\Component;

class OtherProjectsEdit extends Component
{
    public $model=false;
    public $projectId;
    public $image;
    public $title;
    public $days;
    public $lines_code;
    public $projectsCategory;
    public $Catmodel=false;
    public function mount(){
     $this->projectsCategory = ProjectCategory::where('id', '!=', 1)->with('projects')->get();
    }

    public function add(){
    $this->model = true;
    }

    public function closeModel(){
     $this->model = false;
     $this->rest();
    }

    public function rest(){
    $this->projectId = '';
    $this->image = '';
    $this->title = '';
    $this->days = '';
    $this->lines_code = '';

    }

    // public function addCategory(){
    // dd($this->Catmodel);
    // }
    public function render()
    {
        return view('livewire.other-projects-edit');
    }
}
