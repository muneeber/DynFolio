<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;

    protected $table = 'icons';

    protected $fillable = [
        'name',
        'svg_code',
    ];

    public $timestamps = true; // Enable automatic timestamps
}
