<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'mobile',
        'icons',
        'image',
        'fax',
        'post_box',
        'website',
        'meta_keywords',
        'meta_title',
        'meta_description',
        'description'
    ];
}
