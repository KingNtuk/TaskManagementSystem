<?php

return [
    /*
    |--------------------------------------------------------------------------
    | CORS Configuration
    |--------------------------------------------------------------------------
    |
    | The following settings determine how your Laravel application handles
    | Cross-Origin Resource Sharing (CORS). Adjust these settings as needed
    | to allow access from your frontend or other clients.
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Define allowed paths

    'allowed_methods' => ['*'], // Allows all HTTP methods (GET, POST, PUT, DELETE, etc.)

    'allowed_origins' => ['http://localhost:3000'], // Allow requests from React/Vite frontend

    'allowed_origins_patterns' => [], // Not needed unless using regex patterns

    'allowed_headers' => ['*'], // Allow all headers

    'exposed_headers' => [], // No special headers need to be exposed

    'max_age' => 0, // Defines how long preflight responses can be cached

    'supports_credentials' => true, // Set to true if using authentication cookies or tokens
];
