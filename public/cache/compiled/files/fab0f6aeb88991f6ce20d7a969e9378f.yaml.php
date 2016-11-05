<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/user/themes/antimatter/blueprints/modular/hero.yaml',
    'modified' => 1478376304,
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
                                    'type' => 'filepicker',
                                    'folder' => '@self',
                                    'preview_images' => true,
                                    'acccept' => [
                                        0 => '.png',
                                        1 => '.jpg'
                                    ],
                                    'label' => 'Album Image',
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
