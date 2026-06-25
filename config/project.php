<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Project Information
    |--------------------------------------------------------------------------
    */

    'name' => env('PROJECT_NAME', 'MBG Information System'),

    'short_name' => env('PROJECT_SHORT_NAME', 'MBG'),

    'version' => env('PROJECT_VERSION', '1.0.0-dev'),

    'company' => env('PROJECT_COMPANY', 'Badan Gizi Nasional'),

    'website' => env('PROJECT_WEBSITE', 'https://mbg.go.id'),

    /*
    |--------------------------------------------------------------------------
    | Localization
    |--------------------------------------------------------------------------
    */

    'locale' => 'id',

    'timezone' => 'Asia/Jakarta',

    'currency' => 'IDR',

    /*
    |--------------------------------------------------------------------------
    | Application
    |--------------------------------------------------------------------------
    */

    'pagination' => 20,

    'date_format' => 'd/m/Y',

    'datetime_format' => 'd/m/Y H:i',

];
