<?php

return [
    'id' => 'yiibook',
    'basePath' => realpath(__DIR__ . '/../'),
    'components' => [
        'request' => [
            'cookieValidationKey' => '4a4a4',
            'db' => require(__DIR__ . '/db.php')
        ]
    ]
];