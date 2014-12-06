<?php

return [
    'router' => [
        'prototypes' => [
            'zoop/commerce/api' => [
                'type' => 'Hostname',
                'options' => [
                    'route' => 'api.zoopcommerce.com'
                ],
            ],
        ]
    ],
    'doctrine' => [
        'odm' => [
            'connection' => [
                'commerce' => [
                    'dbname' => '',
                    'server' => '',
                    'port' => '',
                    'user' => '',
                    'password' => '',
                ],
            ],
            'configuration' => [
                'commerce' => [
                    'metadata_cache' => 'doctrine.cache.array',
                    'default_db' => '',
                    'generate_proxies' => true,
                    'proxy_dir' => __DIR__ . '/../../data/proxies',
                    'proxy_namespace' => 'proxies',
                    'generate_hydrators' => true,
                    'hydrator_dir' => __DIR__ . '/../../data/hydrators',
                    'hydrator_namespace' => 'hydrators',
                ]
            ],
        ],
    ],
    'zoop' => [
        'aws' => [
            'key' => '',
            'secret' => '+FIaYp',
            's3' => [
                'buckets' => [
                    'test' => 'zoop-web-assets',
                ],
                'endpoint' => [
                    'test' => 'https://zoop-web-assets.s3.amazonaws.com',
                ],
            ],
        ],
        'db' => [
            'host' => '',
            'database' => '',
            'username' => '',
            'password' => '',
            'port' => 3306,
        ],
        'cache' => [
            'handler' => 'mongodb',
            'mongodb' => [
                'host' => '',
                'database' => '',
                'collection' => '',
                'username' => '',
                'password' => '',
                'port' => 27017,
            ],
        ],
        'sendgrid' => [
            'username' => '',
            'password' => ''
        ],
        'session' => [
            'handler' => 'mongodb',
            'mongodb' => [
                'host' => '',
                'database' => '',
                'collection' => '',
                'username' => '',
                'password' => '',
                'port' => 27017,
            ]
        ],
        'theme' => [
            'creator' => [
                'lint' => true,
                'parse' => [
                    'theme' => true,
                    'content' => false,
                    'assets' => false,
                ]
            ],
            'temp_dir' => __DIR__ . '/../../data/temp',
            'max_file_upload_size' => (1024 * 1024 * 20), // 20MB
        ],
    ]
];
