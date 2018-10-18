<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

     'google' => [
        'client_id' => "117860130247-bg2vpt19ll1mjkrfcc69ic9o2p6cmdt7.apps.googleusercontent.com",      
        'client_secret' => "PYVkqr9_9GRYbHi81ByB0jsu", 
        'redirect' => "http://socialite-laravel.com/login/google/callback", 
    ],

    'facebook' => [
        'client_id' => "411198016074872",      
        'client_secret' => "8dc3b0d1510b3b59f4e8830bca0a1e26", 
        'redirect' => "http://socialite-laravel.com/login/facebook/callback", 
    ],

    'github' => [
        'client_id' => "28f96d25df7f8148b76a",      
        'client_secret' => "dc79247c3be704e393107ba049dbd6dbce70735c", 
        'redirect' => "http://socialite-laravel.com/login/github/callback", 
    ],

    // 'facebook' => [
    //     'client_id' => env('FACEBOOK_CLIENT_ID'),      
    //     'client_secret' => env('FACEBOOK_CLIENT_SECRET'), 
    //     'redirect' => env('FACEBOOK_URL'), 
    // ],
//     FACEBOOK_CLIENT_ID="411198016074872"
// FACEBOOK_CLIENT_SECRET="8dc3b0d1510b3b59f4e8830bca0a1e26"
// FACEBOOK_URL="http://socialite-laravel.com/home"

];
