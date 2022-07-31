<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '1243783366448663',
        'client_secret' => '7dba13233fcbe30a2e2d5de3529cdb02',
        'redirect' => 'http://localhost:8000/facebook-login-system',
     ],

     'github' => [
        'client_id' => '12b7ab8c5f6a1f3ecb7c',
        'client_secret' => 'c9762d3281d3f39c50eb415ae35b9f26903eaed2',
        'redirect' => 'http://localhost:8000/github-login-system',
     ],
     'google' => [
        'client_id' => '399921216148-524odiu4cdf0jpulkljsc2je8n1p7nmr.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/google-login-system',
     ],

     'linkedin' => [
        'client_id' => '8654of4mt18npl',
        'client_secret' => 'ckpvn7hJAFE25xGK',
        'redirect' => 'http://localhost:8000/linkedin-login-system',
     ],
     
     

];
