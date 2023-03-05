<?php

namespace App\Models\FRAF;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FRAF extends Model
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

    public function getLimitDescription()
    {
        return Str::limit($this->intro_text, 100);
    }
}
