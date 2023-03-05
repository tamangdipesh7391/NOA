<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'status',
        'meta_title',
        'meta_description',
        'intro_text',
        'description',
        'image',
        'content_type_id',
    ];

    public function getContentType()
    {
        return $this->belongsTo(ContentType::class,
            'content_type_id',
            'id');
    }

    public function getLimitContent()
    {
        return Str::limit($this->description, 100);
    }
}
