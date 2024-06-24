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
    #[Validate('image', 'max:3024', 'mimes:jpg,jpeg,png,gif,webp', 'required')]
    public $image;
    public $projects;
    public $model = false;
    public $projectId; // To hold the project ID for editing

    public function mount(){
        $this->getData();
    }

    public function getData(){
        $this->projects = ProjectCategory::find(1)->projects;
    }

    public function create(){
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'image' => 'required|image|max:3024|mimes:jpg,jpeg,png,gif,webp',
        ]);

        $imagePath = $this->imageSave($this->image);
        // dd($imagePath);
        Project::create([
            'title' => $this->title,
            'description' => $this->description,
            'link' => $this->link,
            'image' => $imagePath,
            'category_id' => 1,
        ]);

        $this->resetForm();
        $this->getData();
    }

    public function edit($id){
        $project = Project::findOrFail($id);
        $this->projectId = $project->id;
        $this->title = $project->title;
        $this->description = $project->description;
        $this->link = $project->link;
        $this->image = null; // Reset image for new upload

        $this->model = true; // Open the modal for editing
    }

    public function update(){
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'image' => 'nullable|image|max:3024|mimes:jpg,jpeg,png,gif,webp',
        ]);

        $project = Project::findOrFail($this->projectId);
        $project->title = $this->title;
        $project->description = $this->description;
        $project->link = $this->link;

        if ($this->image) {
            $project->image = $this->imageSave($this->image);
        }

        $project->save();

        $this->resetForm();
        $this->getData();
    }

    public function resetForm(){
        $this->title = '';
        $this->description = '';
        $this->link = '';
        $this->image = '';
        $this->projectId = null;
        $this->model = false;
    }

    public function openModel(){
        $this->model = true;
    }

    public function closeModel(){
        $this->resetForm();
        $this->getData(); // Ensure data is re-fetched after closing the modal
    }

    public function imageSave($image){
        $path = $image->store('photos', 'public');
        return $path;
    }

    public function delete($id){
        $project = Project::findOrFail($id);
        $project->delete();
        $this->resetForm();
        $this->getData();
    }

    public function render()
    {
        return view('livewire.projects-edit');
    }
}
