<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie', 'login', 'logout'],

    'allowed_methods' => ['*'],

    // You MUST specify the exact origins. You cannot use '*' with credentials.
    'allowed_origins' => [
        'https://ejobs-8a8213gz4-kawthermouli-1310.vercel.app', // Your exact Vercel URL
        'http://localhost:8000', // Keep this so you can still test locally
        'http://127.0.0.1:8000',
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,

];