<?php

return [
    'cookie' => [
        'session_key' => env('LARABEAR_SESSION_KEY'),
    ],
    'response_error_log' => [
        'enabled' => true,
        'ignore_response_codes' => [401,403],
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
