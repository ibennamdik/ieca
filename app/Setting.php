<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $fillable = [
        'appname',
        'logo',
        'address',
        'phone1',
        'phone2',
        'email',
        'web_url',
        'facebook_url',
        'instagram_url',
        'twitter_url',
        'youtube_url',
    ];
}
