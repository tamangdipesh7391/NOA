<?php

namespace App\Models\Awards;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterTravelGrant extends Model
{
    use HasFactory;

    protected $fillable = [
        'reason',
        'date',
        'venue',
        'expected_grant',
        'membership_number',
        'grant_status',
    ];
}
