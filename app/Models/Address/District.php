<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'district_name',
        'province_id',
    ];

    public function province()
    {
        return $this->belongsTo(
            Provinces::class,
            'province_id',
            'id');
    }
}
