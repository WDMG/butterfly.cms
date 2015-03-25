<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\PhpManager',
            'defaultRoles' => ['user','moderator','administrator'], //����� ����������� ����
            'itemFile' => '@common/components/rbac/items.php', //������� ���� ����� ����������� ���� ����� ������������ RBAC
            'assignmentFile' => '@common/components/rbac/assignments.php',
            'ruleFile' => '@common/components/rbac/rules.php'
        ],
        /*'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '@app/messages',
                    //'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],*/
    ],
    'sourceLanguage'=>'en-US',
    'language'=>'ru',
    'charset'=>'utf-8',
    'timeZone' => 'Europe/Kiev',
    'version' => '1.0',
];