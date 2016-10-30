<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/user/themes/antimatter/blueprints/modular/hero.yaml',
    'modified' => 1476246816,
    'data' => [
        'title' => 'Hero',
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
                            'type' => 'tab',
                            'title' => 'Home page album',
                            'fields' => [
                                'header.album_text' => [
                                    'type' => 'text',
                                    'label' => 'Album text',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'header.album_art' => [
                                    'type' => 'pagemediaselect',
                                    'multiple' => false,
                                    'destination' => '@self',
                                    'accept' => [
                                        0 => 'image/*'
                                    ],
                                    'label' => 'Album art',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'header.apple_music_link' => [
                                    'type' => 'text',
                                    'label' => 'Apple Music link'
                                ],
                                'header.spotify_link' => [
                                    'type' => 'text',
                                    'label' => 'Spotify link'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
