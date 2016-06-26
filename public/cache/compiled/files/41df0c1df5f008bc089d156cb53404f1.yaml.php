<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/system/blueprints/pages/modular_raw.yaml',
    'modified' => 1456442350,
    'data' => [
        'rules' => [
            'slug' => [
                'pattern' => '[a-z][a-z0-9_\\-]+',
                'min' => 2,
                'max' => 80
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.CONTENT',
                            'fields' => [
                                'frontmatter' => [
                                    'type' => 'frontmatter',
                                    'label' => 'PLUGIN_ADMIN.FRONTMATTER'
                                ],
                                'content' => [
                                    'type' => 'markdown',
                                    'showPreview' => true
                                ],
                                'uploads' => [
                                    'type' => 'pagemedia',
                                    'label' => 'PLUGIN_ADMIN.PAGE_MEDIA'
                                ]
                            ]
                        ],
                        'options' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.OPTIONS',
                            'fields' => [
                                'columns' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'column1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'ordering' => [
                                                    'type' => 'toggle',
                                                    'label' => 'PLUGIN_ADMIN.FOLDER_NUMERIC_PREFIX',
                                                    'help' => 'PLUGIN_ADMIN.FOLDER_NUMERIC_PREFIX_HELP',
                                                    'highlight' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'folder' => [
                                                    'type' => 'text',
                                                    'label' => 'PLUGIN_ADMIN.FILENAME',
                                                    'validate' => [
                                                        'type' => 'slug',
                                                        'required' => true
                                                    ]
                                                ],
                                                'route' => [
                                                    'type' => 'select',
                                                    'label' => 'PLUGIN_ADMIN.PARENT',
                                                    'classes' => 'fancy',
                                                    '@data-options' => '\\Grav\\Common\\Page\\Pages::parents',
                                                    '@data-default' => '\\Grav\\Plugin\\admin::route',
                                                    'options' => [
                                                        '' => 'PLUGIN_ADMIN.DEFAULT_OPTION_SELECT'
                                                    ],
                                                    'validate' => [
                                                        'required' => true
                                                    ]
                                                ],
                                                'name' => [
                                                    'type' => 'select',
                                                    'classes' => 'fancy',
                                                    'label' => 'PLUGIN_ADMIN.MODULAR_TEMPLATE',
                                                    'default' => 'default',
                                                    '@data-options' => '\\Grav\\Common\\Page\\Pages::modularTypes',
                                                    'validate' => [
                                                        'required' => true
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'column2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'order' => [
                                                    'type' => 'order',
                                                    'label' => 'PLUGIN_ADMIN.ORDERING'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'blueprint' => [
                                    'type' => 'blueprint'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
