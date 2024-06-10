<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SideNavLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'enabled',
    ];

    public function icon()
    {
        return $this->belongsTo(Icon::class, 'name', 'name');
    }
}
