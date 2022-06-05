<?php

return [
    'cookie' => [
        'session_key' => env('LARABEAR_SESSION_KEY'),
    ],
    'uptime_kuma' => [
        'base_url' => env('LARABEAR_UPTIME_KUMA_BASE_URL'),
    ],
    'user_table' => [
        'table_name' => 'users',
        'primary_key_column' => 'id',
        'primary_key_type' => 'uuid', //Options uuid, integer, biginteger
    ],
];
