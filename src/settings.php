<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        // Database connection settings
        /**
         * Create Database / User 
         * http://www.daniloaz.com/en/how-to-create-a-user-in-mysql-mariadb-and-grant-permissions-on-a-specific-database/
         */
        "db" => [
            "host" => "locahost",
            "dbname" => "teamhang",
            "user" => "teamhangDbUser",
            "pass" => "Veera@322"
        ],
    ],
];
