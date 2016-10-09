<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/user/themes/antimatter/blueprints/post.yaml',
    'modified' => 1475967957,
    'data' => [
        'title' => 'Post',
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
                                'header.date' => [
                                    'type' => 'datetime',
                                    'label' => 'PLUGIN_ADMIN.DATE',
                                    'help' => 'PLUGIN_ADMIN.DATE_HELP',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
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
