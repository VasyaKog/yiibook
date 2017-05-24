<?php
return [
    'id' => 'yiibook-console',
    'basePath' => realpath(__DIR__.'/../'),
    'components' => [
        'db'=>require(__DIR__.'/db.php'),
    ]
];