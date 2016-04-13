<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/user/themes/cosmicdropper/blueprints/article.yaml',
    'modified' => 1460587562,
    'data' => [
        'title' => 'Article',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.cover_image' => [
                                    'type' => 'pagemediaselect',
                                    'multiple' => false,
                                    'destination' => '@self',
                                    'accept' => [
                                        0 => 'image/*'
                                    ],
                                    'label' => 'Cover Image'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
