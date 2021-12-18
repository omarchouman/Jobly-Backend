<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Laravel\Passport\HasApiTokens;

class Employer extends Authenticatable
{
    use HasFactory,HasApiTokens, Notifiable;

      /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        // 'last_login'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $fillable = [
        'name', 
        'address',
        'slogan',
        'description',
        'email',
        'password',
        'profile_image',
        'company_type',
        'technologies_using',
        'isVerified',
        'phone',
        'website',
        'status',
        'facebook', 'twitter', 'youtube', 'github',
        'views',
        'isFeatured',
        'active'
    ];

    public function jobs()
    {
        return $this->hasMany('\App\Models\Job');
    }
}
