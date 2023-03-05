<?php

namespace App\Models\Menu;

use App\Models\About\About;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'order',
        'url',
        'icon',
        'is_active',
    ];


    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id', 'id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id');
    }


    public function subAboutMenu()
    {
        return $this->hasMany(About::class, 'menu_id', 'id');
    }
}
