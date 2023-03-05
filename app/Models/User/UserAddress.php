<?php

namespace App\Models\User;

use App\Models\Address\Country;
use App\Models\Address\District;
use App\Models\Address\Municipalities;
use App\Models\Address\Provinces;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'permanent_country',
        'permanent_province',
        'permanent_district',
        'permanent_municipality',
        'permanent_tole',
        'temporary_country',
        'temporary_province',
        'temporary_district',
        'temporary_municipality',
        'temporary_tole',
    ];

    public function pCountry()
    {
        return $this->belongsTo(Country::class, 'permanent_country', 'id');
    }

    public function pProvince()
    {
        return $this->belongsTo(Provinces::class, 'permanent_province', 'id');
    }

    public function pDistrict()
    {
        return $this->belongsTo(District::class, 'permanent_district', 'id');
    }

    public function pMuicipality()
    {
        return $this->belongsTo(Municipalities::class, 'permanent_municipality', 'id');
    }


    public function tCountry()
    {
        return $this->belongsTo(Country::class, 'temporary_country', 'id');
    }

    public function tProvince()
    {
        return $this->belongsTo(Provinces::class, 'temporary_province', 'id');
    }

    public function tDistrict()
    {
        return $this->belongsTo(District::class, 'temporary_district', 'id');
    }

    public function tMuicipality()
    {
        return $this->belongsTo(Municipalities::class, 'temporary_municipality', 'id');
    }
}
