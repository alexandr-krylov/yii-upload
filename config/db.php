<?php

use yii\db\Connection;

return [
    'class' => Connection::class, //'yii\db\Connection',
    'schemaMap' => [
        'mysql' => \SamIT\Yii2\MariaDb\Schema::class,
    ],
    'dsn' => 'mysql:host=db;dbname=yii2basic',
    'username' => 'root',
    'password' => 'example',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
