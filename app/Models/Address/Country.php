<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'country_name',
    ];

    public function province()
    {
        return $this->hasMany(
            Provinces::class,
            'country_id',
            'id');
    }
}
