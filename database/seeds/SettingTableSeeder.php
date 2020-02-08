<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'appname' => 'IECA',
            'address' => 'Abuja, Nigeria',
            'phone1' => '234 807 883 0874',
            'phone2' => '234 703 676 4008',
            'email' => 'info@ieca.com.ng',
            'web_url' => 'www.ieca.com.ng',
            'facebook_url' => 'www.facebook.com/ieca',
            'instagram_url' => 'www.instagram.com/ieca',
            'twitter_url' => 'www.twitter.com/ieca',
            'youtube_url' => 'www.youtube.com/ieca',
        ]);
    }
}
