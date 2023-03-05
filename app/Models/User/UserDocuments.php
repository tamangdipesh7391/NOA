<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDocuments extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'front_size',
        'back_size',
        'image',
        'citizenship_no',
        'qualification',
        'year_of_graduation',
        'university',
        'date_of_registration',
    ];

}
