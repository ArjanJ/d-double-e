<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/user/themes/antimatter/blueprints/post.yaml',
    'modified' => 1478380292,
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
                                    'type' => 'filepicker',
                                    'folder' => '@self',
                                    'preview_images' => true,
                                    'accept' => [
                                        0 => '.png',
                                        1 => '.jpg'
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
