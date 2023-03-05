<?php

namespace App\Models\Events;

use App\Models\Menu\Menu;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'status',
        'date',
        'end_date',
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
