<?php

namespace App\Models\Publications;

use App\Models\Menu\Menu;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Publications extends Model
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
        'type',
    ];

    public function getFiles()
    {
        return $this->hasMany(
            PublicationFiles::class,
            'publication_id',
            'id');
    }

    public function getLimitPublicationTest()
    {
        return Str::limit($this->intro_text, 100);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }

    public function totalPublicationFiles()
    {
        return $this->hasMany(PublicationFiles::class, 'publication_id', 'id')->count();
    }

    public function getLimitDescription()
    {
        return substr($this->description, 0, 100);
    }
}
