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

    'paths' => ['api/*'],

    'allowed_methods' => ['GET', 'POST', 'PUT', 'DELETE'],

    'allowed_origins' => ['http://localhost:80', 'http://blog.test'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['Access-Control-Allow-Origin', 'content-type', 'accept', 'x-custom-header'],

    'exposed_headers' => ['x-custom-response-header'],

    'max_age' => 60,

    'supports_credentials' => false,

];
