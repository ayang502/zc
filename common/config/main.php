<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        "authManager" => [        
            "class" => 'yii\rbac\DbManager', //这里记得用单引号而不是双引号        
            "defaultRoles" => ["guest"],    
        ],
    ],
];
