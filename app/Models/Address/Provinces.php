<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    use HasFactory;

    protected $fillable = [
        'province_name',
        'country_id',
    ];

    public function country()
    {
        return $this->belongsTo(
            Country::class,
            'country_id',
            'id');
    }

    public function district()
    {
        return $this->hasMany(
            District::class,
            'province_id',
            'id');
    }
}
