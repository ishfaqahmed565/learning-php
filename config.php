<?php
return [
    'database'=>[
        'name' => 'mytodo',
        'dbUser' => 'root',
        'dbPassword' => '',
        'connection'=>'mysql:host=localhost',
        'options' => [PDO::ATTR_ERRMODE=> PDO::ERRMODE_WARNING]
    ]
];