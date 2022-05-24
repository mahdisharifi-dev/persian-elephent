<?php

return [

    'app' => [
        'name' => getEnvData('APP_NAME'),
        'version' => getEnvData('APP_VERSION')
    ],

    'database' => [
        'driver'    => getEnvData('DB_DRIVER'),
        'host'      => getEnvData('DB_HOST'),
        'database'  => getEnvData('DB_NAME'),
        'username'  => getEnvData('DB_USERNAME'),
        'password'  => getEnvData('DB_PASSWORD'),
        'charset'   => getEnvData('DB_CHARSET'),
        'collation' => getEnvData('DB_COLLATION'),
        'prefix'    => getEnvData('DB_PREFIX')
    ],

    'auth' => [
        'auth' => true,
        'unique' => 'username'
    ],

];