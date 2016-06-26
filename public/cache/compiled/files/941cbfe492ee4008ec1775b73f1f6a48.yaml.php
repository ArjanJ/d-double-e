<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/user/themes/cosmicdropper/blueprints/home.yaml',
    'modified' => 1466914842,
    'data' => [
        'title' => 'Home',
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
