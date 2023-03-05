<?php

namespace App\Models\Gallery;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'status'
    ];

    public function totalGalleryImage()
    {
        return $this->hasMany(GalleryImage::class, 'gallery_id', 'id')->count();
    }

    public function allImages()
    {
        return $this->hasMany(GalleryImage::class, 'gallery_id', 'id');
    }
}
