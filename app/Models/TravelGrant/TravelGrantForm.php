<?php

namespace App\Models\TravelGrant;

use App\Models\Address\Country;
use App\Models\Address\District;
use App\Models\Address\Municipalities;
use App\Models\Address\Provinces;
use App\Models\Conference\Conference;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelGrantForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'gender',
        'phone',
        'travel_grant_id',
        'country_id',
        'province_id',
        'district_id',
        'municipality_id',
        'tole',
        'image'
    ];

    public function getCountry()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function getTravelGrant()
    {
        return $this->belongsTo(TravelGrant::class, 'travel_grant_id', 'id');
    }

    public function getProvince()
    {
        return $this->belongsTo(Provinces::class, 'province_id', 'id');
    }

    public function getDistrict()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    public function getMuicipality()
    {
        return $this->belongsTo(Municipalities::class, 'municipality_id', 'id');
    }
}
