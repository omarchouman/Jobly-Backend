<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Jobseeker extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        // 'last_login',
    ];

    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_image',
        'resume_file',
        'cover_letter',
        'gender',
        'skills',
        'qualification',
        'title',
        'address',
        'phone',
        'website',
        'status',
        'facebook', 'twitter','youtube', 'github',
        'views',
        'isFeatured',
        'active'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
