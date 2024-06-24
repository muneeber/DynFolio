<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;
    protected $table = 'skills';

    protected $fillable = [
        'name',
        'skill_category_id',
        'color',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(SkillCategory::class);
    }

}
