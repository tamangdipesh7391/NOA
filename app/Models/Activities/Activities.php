<?php

namespace App\Models\Activities;

use App\Models\Menu\Menu;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'title',
        'slug',
        'status',
        'meta_title',
        'meta_description',
        'intro_text',
        'description',
        'image',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }

    public function getLimitDescription()
    {
        return substr($this->description, 0, 100);
    }


}
