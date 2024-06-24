<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SkillCategory extends Model
{
    use HasFactory;
    protected $table = 'skill_categories';

    protected $fillable = [
        'name',
    ];

    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class);
    }
}
