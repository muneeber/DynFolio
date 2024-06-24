<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidelink extends Model
{
    use HasFactory;
    protected $table = 'sidelinks';

    protected $fillable = [
        'Title',
        'svg_icon',
        'link',
        'status'
    ];
}
