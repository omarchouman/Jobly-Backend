<?php

namespace Database\Seeders;

use App\Models\App;
use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App::create([
            
        	'app_name' => 'Jobly',
        	'app_slogan' => 'get your dream Job',
        	'app_icon' => 'http:://jobmalai.test/logo.ico',
        	'app_logo' => 'http:://jobmalai.test/logo.png',
        	'address' => 'Beirut, Lebanon',
        	'phone' => '+961 78890304',
        	'mobile' => ' +961 78890304',
        	'email' => 'omar.chouman0@gmail.com',
        	'facebook' => 'https://www.facebook.com/omar.chouman.58/',
        	'github' => 'https://github.com/omarchouman',
        	'youtube' => 'https://www.youtube.com/channel/UCuGFjOa6NMMzwq7YbZ9Z0Kg',
        	'copyright_text' => 'Copyright © 2021 All rights reserved',
        ]);
    }
}
