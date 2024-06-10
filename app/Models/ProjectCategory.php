<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectCategory extends Model
{
    use HasFactory;

    protected $table = 'projects_categories';

    protected $fillable = [
        'name',
    ];

    public $timestamps = false; // Assuming you don't need created_at and updated_at for this table

    public function projects()
    {
        return $this->hasMany(Project::class, 'category_id');
    }
}
