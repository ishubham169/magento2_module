<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'crypt' => [
        'key' => 'cd13362ccde81662074822702def376b'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'shubham',
                'username' => 'magento',
                'password' => 'password',
                'active' => '1'
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'install' => [
        'date' => 'Fri, 04 Jan 2019 07:09:53 +0000'
    ],
    'cache_types' => [
        'compiled_config' => 1
    ]
];
