<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SmallProject;

class SmallProjectsEdit extends Component
{
    public $modal=false;
    public $projects;
    public $title;
    public $description;
    public $svg_icon;
    public $link;
    public $projectEditing;

    public function mount(){
        $this->getData();
    }

    public function getData(){
        $this->projects = SmallProject::all();
        // dd($this->projects);
    
    }

    public function add(){
        $this->modal = true;
    }
    public function create(){
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'svg_icon' => 'required',
            'link' => 'required',
        ]);
        // dd( $this->title, $this->description, $this->svg_icon, $this->link);
        SmallProject::create([
            'title' => $this->title,
            'description' => $this->description,
            'svg_icon_code' => $this->svg_icon,
            'link' => $this->link,
        ]);
        $this->projects = SmallProject::all();
        $this->closemodal();
        $this->getData();
    }
    public function delete($id){
        SmallProject::destroy($id);
        $this->getData();
    }

    public function edit($id){
        $project = SmallProject::find($id);
        $this->projectEditing = $project;
        $this->title = $project->title;
        $this->description = $project->description;
        $this->svg_icon = $project->svg_icon_code;
        $this->link = $project->link;
        $this->modal = true;
    
    }

    public function update(){
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'svg_icon' => 'required',
            'link' => 'required',
        ]);
        $this->projectEditing->update([
            'title' => $this->title,
            'description' => $this->description,
            'svg_icon_code' => $this->svg_icon,
            'link' => $this->link,
        ]);
        $this->projects = SmallProject::all();
        $this->closemodal();
        $this->getData();
    }

    public function closemodal(){
    $this->projectEditing = null;
    $this->modal = false;
    $this->title = '';
    $this->description = '';
    $this->svg_icon = '';
    $this->link = '';
    }
    public function render()
    {
        return view('livewire.small-projects-edit');
    }
}
