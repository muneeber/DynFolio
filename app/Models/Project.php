<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'image',
        'title',
        'description',
        'days_ago',
        'code_lines',
        'category_id',
    ];

    public $timestamps = false; // Assuming you don't need created_at and updated_at for this table

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'category_id');
    }
}
