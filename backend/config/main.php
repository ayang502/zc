<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'language' => 'zh-CN',
    'charset' => 'utf-8',
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        "admin" => [
            "class" => "mdm\admin\Module",
            //'layout' => 'left-menu',
        ],
        'gii'   => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['*']
        ],
    ],
    "aliases" => [
        "@mdm/admin" => "@vendor/mdmsoft/yii2-admin",
    ],
    'components' => [
        "authManager" => [
            "class" => 'yii\rbac\DbManager',
            "defaultRoles" => ["guest"],
        ],
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'mdm\admin\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
            'loginUrl' => ['admin/user/login', 'ref' => 1],
        ],
        'session' => [
            'name' => 'advanced-backend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,    
            'enableStrictParsing' => false,    
            'showScriptName' => false,    
            'suffix' => '',    
            'rules' => [
                "<controller:\w+>/<id:\d+>"=>"<controller>/view",  
                "<controller:\w+>/<action:\w+>"=>"<controller>/<action>"    

            ],
        ],
        'i18n' => [
            'translations' => [
                'rbac-admin' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@mdm/admin/messages',
                    'sourceLanguage' => 'zh-CH',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
                'loan' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@backend/messages',
                    'sourceLanguage' => 'zh-CH',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            '*',
            //这里是允许访问的action
            "user/login",
            "site/index",
            "user/logout",
        ]
    ],
    'params' => $params,
];
