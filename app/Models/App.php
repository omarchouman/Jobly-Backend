<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_name',
        'app_slogan',
        'app_logo',
        'app_icon',
        'address',
        'phone',
        'mobile',
        'email',
        'currency_symbol',
        'facebook', 'twitter', 'youtube', 'github',
        'copyright_text'
    ];
}
