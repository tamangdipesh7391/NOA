<?php

namespace App\Models\TravelGrant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelGrant extends Model
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
}
