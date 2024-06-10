<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ProjectCategory;
use Livewire\Attributes\Validate;

class ProjectsEdit extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $link;
    #[Validate('image', 'max:3024', 'mimes:jpg,jpeg,png,gif', 'required')] 
    public $image;
    public $projects;
    public function mount(){
        $this->projects=ProjectCategory::find(1)->projects;
    }

    public function create(){
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'image' => 'required',
            ]);
        // dd('hi');
        $this->image = $this->imageSave($this->image);
        $res=Project::create([
            'title' => $this->title,
            'description' => $this->description,
            'link' => $this->link,
            'image' => $this->image,
            'category_id' => 1,
        ]);
        $this->title = '';
        $this->description = '';
        $this->link = '';
        $this->image = '';

    }
    public function imageSave($image)
    {
        $path=$image->store('photos', 'public');
        return $path;
    }
    public function render()
    {
        return view('livewire.projects-edit');
    }
}
