<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authentication;

class Admin extends Authentication
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'gender',
        'role',
        'status',
        'login_status'
    ];

    public function adminGallery()
    {
        return $this->hasMany(AdminGallery::class, 'admin_id', 'id');
    }

    public function image()
    {
        return $this->adminGallery()->orderBy('id','desc')->first()->image ?? '';
    }
}
