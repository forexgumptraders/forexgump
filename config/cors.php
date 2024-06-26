<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    
    'paths' => ['*'],

    'allowed_methods' => ['GET, PUT, POST, DELETE, OPTIONS'],

    'allowed_origins' => ['http://blog.test'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['Content-Type', 'Accept', 'X-Custom-Header', 'X-Auth-Token', 'Authorization'],

    'exposed_headers' => ['x-custom-response-header'],

    'max_age' => 1000,

    'supports_credentials' => true,

];
