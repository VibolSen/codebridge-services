<?php

return [
    'ui' => [
        'title' => 'CodeBridges Auth & Identity Service API',
    ],
    'servers' => [
        'Cloud Production' => 'https://pos-services-ph15.onrender.com',
        'Local Gateway' => 'http://localhost:8080',
    ],
    'path' => 'docs/api',
    'middleware' => [
        'web',
    ],
    'api_path' => 'api',
    'api_domain' => null,
    'info' => [
        'version' => '1.0.0',
        'description' => 'Auth & Identity Microservice API Documentation',
    ],
];
