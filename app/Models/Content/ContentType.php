<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentType extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'status',
        'description',
        'image',
    ];

    public function getContent()
    {
        return $this->hasMany(
            Content::class,
            'content_type_id',
            'id');
    }

}
