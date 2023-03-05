<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'date',
        'status',
        'meta_title',
        'link',
        'meta_description',
        'description',
        'image',
        'page_visit',
    ];

    public function getLimitDescription()
    {
        return Str::limit($this->description, 100);
    }
}
