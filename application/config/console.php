<?php

return [
    'id' => 'My Syte',
    'name' => 'My Site',
    'basePath' => dirname(__DIR__),
    'vendorPath' => __DIR__ . '/../../vendor/',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
    ]
];