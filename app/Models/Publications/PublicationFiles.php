<?php

namespace App\Models\Publications;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationFiles extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'file',
        'publication_id',
    ];
}
