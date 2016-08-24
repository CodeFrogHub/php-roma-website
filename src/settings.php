<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // View settings
        'view' => [
            'template_path' => __DIR__ . '/../templates/',
            'cache_path' => false, //__DIR__ . '/../.tmp',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'roma-website-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
