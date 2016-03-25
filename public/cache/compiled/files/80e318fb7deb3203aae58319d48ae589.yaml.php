<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/user/themes/cosmicdropper/blueprints/post.yaml',
    'modified' => 1457744701,
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
                                'header.an_example_field' => [
                                    'type' => 'text',
                                    'label' => 'Location'
                                ],
                                'header.event_name' => [
                                    'type' => 'text',
                                    'label' => 'Event name'
                                ],
                                'header.date_picker' => [
                                    'type' => 'Datetime',
                                    'label' => 'Date'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
