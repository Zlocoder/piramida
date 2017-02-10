<?php

return [
    'id' => 'My Syte',
    'name' => 'My Site',
    'basePath' => dirname(__DIR__),
    'vendorPath' => __DIR__ . '/../../vendor/',
    'components' => [
        'request' => [
            'cookieValidationKey' => 'T4uebEbDFJFznKD6Fp3y2Hvd3byWmOs0',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'assetManager' => [
            'forceCopy' => true,
        ],
        'db' => require(__DIR__ . '/db.php'),
    ]
];
