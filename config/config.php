<?php declare(strict_types=1);

return [
    'cookie.session_key' => env(key: 'LARABEAR_SESSION_KEY'),
    'include_exception_message_in_production' => false,
    'response_error_log' => [
        'enabled' => true,
        'ignore_response_codes' => [401, 403],
    ],
    'route_usage_log' => [
        'enabled' => true,
        'log_one_in_every' => 1,
    ],
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
