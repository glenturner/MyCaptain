<?php

return [
    'user' => [
        'model' => 'App\User',
    ],
    'broadcast' => [
        'enable' => true,
        'app_name' => 'My-Captain',
        'pusher' => [
            'app_id'        => env('PUSHER_APP_ID'),
            'app_key'       => env('PUSHER_KEY'),
            'app_secret'    => env('PUSHER_SECRET'),
            'options' => [
                'cluster' => 'ap1',
                'encrypted' => true
            ]
        ],
    ],
];
