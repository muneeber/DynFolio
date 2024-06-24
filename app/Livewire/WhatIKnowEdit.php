<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SkillCategory;

class WhatIKnowEdit extends Component
{
    public $skills;
    public $modal = false;
    public $skillCategoryName;
    public $skillName;
    public $skillColor;
    public $newSkills = [];
    public $edit = false;
    public $colors = [
        'none',
        "slate",
        "gray",
        "zinc",
        "neutral",
        "stone",
        "red",
        "orange",
        "amber",
        "yellow",
        "lime",
        "green",
        "emerald",
        "teal",
        "cyan",
        "sky",
        "blue",
        "indigo",
        "violet",
        "purple",
        "fuchsia",
        "pink",
        "rose"
    ];
    public $skillEditing;
    public function mount()
    {
        $this->getData();
    }

    public function Add()
    {
        $this->modal = true;
    }

    public function addSkill()
    {
        $this->newSkills[] = ['name' => $this->skillName, 'color' => $this->skillColor];
        $this->skillName = '';
        $this->skillColor = '';
    }

   
    public function deleteSkill($index)
    {
        unset($this->newSkills[$index]);
        $this->newSkills = array_values($this->newSkills); // reindex the array
    }

    public function create(){
       
        $skillCategory=SkillCategory::create([
            'name' => $this->skillCategoryName,
        ]);
        foreach($this->newSkills as $skill){
            $skillCategory->skills()->create([
                'name' => $skill['name'],
                'color' => $skill['color']
            ]);
        }
        $this->getData();
        $this->modal = false;
    }

    public function closemodal(){
        $this->modal = false;
        $this->rest();
    }
    public function deleteSkillCategory($id){
        $res=SkillCategory::find($id)->delete();
        $this->getData();
    }

    public function editSkillCategory($id){
        $this->modal = true;
        $skillCategory=SkillCategory::find($id);
        $this->skillEditing = $skillCategory;
        $this->skillCategoryName = $skillCategory->name;
        $this->newSkills = $skillCategory->skills->toArray();
 
    
    }

    public function rest(){
    $this->skillCategoryName = '';
    $this->skillName = '';
    $this->skillColor = '';
    $this->newSkills = [];

    }

    public function update(){
        $this->skillEditing->update([
            'name' => $this->skillCategoryName,
        ]);
        $this->skillEditing->skills()->delete();
        foreach($this->newSkills as $skill){
            $this->skillEditing->skills()->create([
                'name' => $skill['name'],
                'color' => $skill['color']
            ]);
            
        }
        $this->getData();
        $this->modal = false;
    }

    
    public function getData(){
        $this->skills = SkillCategory::with('skills')->get();
    
    }


    public function render()
    {
        return view('livewire.what-i-know-edit');
    }
}
