<?php

return [
    'server' => env('OCTANE_SERVER', 'frankenphp'),
    
    'https' => [
        'redirect' => false,
    ],
    
    'workers' => 2,
    'max_requests' => 500,
];