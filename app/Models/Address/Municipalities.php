<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipalities extends Model
{
    use HasFactory;

    protected $fillable = [
        'municipality_name',
        'district_id',
    ];

    public function district()
    {
        return $this->belongsTo(
            District::class,
            'district_id',
            'id');
    }
}
