<?php

return [
    'cookie' => [
        'session_key' => env(key: 'LARABEAR_SESSION_KEY'),
    ],
    'log_database_connection' => null,
    'log_database_change_channel' => null,
    'response_error_log' => [
        'enabled' => true,
        'ignore_response_codes' => [401, 403],
    ],
    'route_usage_log' => [
        'enabled' => true,
        'log_one_in_every' => 1,
    ],
    'uptime_kuma' => [
        'base_url' => env(key: 'LARABEAR_UPTIME_KUMA_BASE_URL'),
    ],


    //------------------------------------------------------------------------------------------------------------------
    // General config required to generate Crud classes.
    //------------------------------------------------------------------------------------------------------------------
    'data_access_layer_folder' => 'Domain',
    'application_layer_folder' => 'Service',
    'presentation_layer_folder' => 'Web',
    //------------------------------------------------------------------------------------------------------------------
    // Config for generating eloquent models, the "eloquent-models" array has en entry for each connection that wants models generated,as defined in config/database.php
    //------------------------------------------------------------------------------------------------------------------
    'eloquent-model-generator' => [
        'pgsql' => [
            'users' => [
                'class' => 'User',
                'location' => 'Domain/User/Model',
                'log_change' => true,
                'log_exclude_columns' => ['microsoft_last_login_at'],
                'traits' =>[],
            ],
        ]
    ],
];
