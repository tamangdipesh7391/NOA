<?php

namespace App\Models\Awards;

use App\Models\Menu\Menu;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Awards extends Model
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

    public function getLimitDescription()
    {
        return Str::limit($this->description, 100);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }
}
