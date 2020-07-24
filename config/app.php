<?php

return [
    'database' => [
        'driver'    => $_ENV['DB_DRIVE'] ?? 'mysql',
        'host'      => $_ENV['DB_HOST'] ?? 'localhost',
        'database'  => $_ENV['DB_DATABASE'] ?? 'basic_eloquent',
        'username'  => $_ENV['DB_USER'] ?? 'root',
        'password'  => $_ENV['DB_PASSWORD'] ?? '',
        'charset'   => $_ENV['DB_CHARSET'] ?? 'utf8',
        'collation' => $_ENV['DB_COLLATION'] ?? 'utf8_unicode_ci',
        'prefix'    => $_ENV['DB_PREFIX'] ?? '',
    ],
];
