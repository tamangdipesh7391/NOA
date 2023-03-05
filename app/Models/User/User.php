<?php

namespace App\Models\User;

use App\Models\Address\Country;
use App\Models\Address\District;
use App\Models\Address\Municipalities;
use App\Models\Address\Provinces;
use App\Models\MembershipType\MembershipType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'membership_type_id',
        'name',
        'email',
        'gender',
        'phone',
        'password',
        'date_of_birth',
        'account_status',
    ];

    public function userAddress()
    {
        return $this->hasOne(UserAddress::class, 'user_id', 'id');

    }

    public function profile()
    {
        return $this->hasOne(UserDocuments::class, 'user_id', 'id');
    }

    public function memberType()
    {
        return $this->belongsTo(MembershipType::class, 'membership_type_id', 'id');
    }

    public function isExpired()
    {
        return $this->created_at->addYear()->toDateString();
    }

}
