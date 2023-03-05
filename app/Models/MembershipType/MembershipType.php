<?php

namespace App\Models\MembershipType;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'price',
        'description',
        'status'
    ];
}
