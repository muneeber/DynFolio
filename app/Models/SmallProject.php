<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmallProject extends Model
{
    use HasFactory;
    protected $table = 'small_projects';

    protected $fillable = [
        'title',
        'description',
        'svg_icon_code',
        'link',
    ];
}
