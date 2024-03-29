<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/system/blueprints/pages/default.yaml',
    'modified' => 1477807593,
    'data' => [
        'title' => 'PLUGIN_ADMIN.DEFAULT',
        'rules' => [
            'slug' => [
                'pattern' => '[a-zа-я][a-zа-я0-9_\\-]+',
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
                                'header.title' => [
                                    'type' => 'text',
                                    'autofocus' => true,
                                    'style' => 'vertical',
                                    'label' => 'PLUGIN_ADMIN.TITLE'
                                ],
                                'content' => [
                                    'type' => 'markdown',
                                    'validate' => [
                                        'type' => 'textarea'
                                    ]
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
                                'publishing' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.PUBLISHING',
                                    'underline' => true,
                                    'fields' => [
                                        'header.published' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_ADMIN.PUBLISHED',
                                            'help' => 'PLUGIN_ADMIN.PUBLISHED_HELP',
                                            'highlight' => 1,
                                            'size' => 'medium',
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'header.date' => [
                                            'type' => 'datetime',
                                            'label' => 'PLUGIN_ADMIN.DATE',
                                            'toggleable' => true,
                                            'help' => 'PLUGIN_ADMIN.DATE_HELP'
                                        ],
                                        'header.publish_date' => [
                                            'type' => 'datetime',
                                            'label' => 'PLUGIN_ADMIN.PUBLISHED_DATE',
                                            'toggleable' => true,
                                            'help' => 'PLUGIN_ADMIN.PUBLISHED_DATE_HELP'
                                        ],
                                        'header.unpublish_date' => [
                                            'type' => 'datetime',
                                            'label' => 'PLUGIN_ADMIN.UNPUBLISHED_DATE',
                                            'toggleable' => true,
                                            'help' => 'PLUGIN_ADMIN.UNPUBLISHED_DATE_HELP'
                                        ],
                                        'header.metadata' => [
                                            'toggleable' => true,
                                            'type' => 'array',
                                            'label' => 'PLUGIN_ADMIN.METADATA',
                                            'help' => 'PLUGIN_ADMIN.METADATA_HELP',
                                            'placeholder_key' => 'PLUGIN_ADMIN.METADATA_KEY',
                                            'placeholder_value' => 'PLUGIN_ADMIN.METADATA_VALUE'
                                        ]
                                    ]
                                ],
                                'taxonomies' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.TAXONOMIES',
                                    'underline' => true,
                                    'fields' => [
                                        'header.taxonomy' => [
                                            'type' => 'taxonomy',
                                            'label' => 'PLUGIN_ADMIN.TAXONOMY',
                                            'multiple' => true,
                                            'validate' => [
                                                'type' => 'array'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'advanced' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.ADVANCED',
                            'fields' => [
                                'columns' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'column1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'settings' => [
                                                    'type' => 'section',
                                                    'title' => 'PLUGIN_ADMIN.SETTINGS',
                                                    'underline' => true
                                                ],
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
                                                    'label' => 'PLUGIN_ADMIN.FOLDER_NAME',
                                                    'validate' => [
                                                        'type' => 'slug'
                                                    ]
                                                ],
                                                'route' => [
                                                    'type' => 'select',
                                                    'label' => 'PLUGIN_ADMIN.PARENT',
                                                    'classes' => 'fancy',
                                                    'data-options@' => '\\Grav\\Common\\Page\\Pages::parentsRawRoutes',
                                                    'data-default@' => '\\Grav\\Plugin\\admin::rawRoute',
                                                    'options' => [
                                                        '/' => 'PLUGIN_ADMIN.DEFAULT_OPTION_ROOT'
                                                    ]
                                                ],
                                                'name' => [
                                                    'type' => 'select',
                                                    'classes' => 'fancy',
                                                    'label' => 'PLUGIN_ADMIN.PAGE_FILE',
                                                    'help' => 'PLUGIN_ADMIN.PAGE_FILE_HELP',
                                                    'default' => 'default',
                                                    'data-options@' => '\\Grav\\Common\\Page\\Pages::pageTypes'
                                                ],
                                                'header.body_classes' => [
                                                    'type' => 'text',
                                                    'label' => 'PLUGIN_ADMIN.BODY_CLASSES'
                                                ]
                                            ]
                                        ],
                                        'column2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'order_title' => [
                                                    'type' => 'section',
                                                    'title' => 'PLUGIN_ADMIN.ORDERING',
                                                    'underline' => true
                                                ],
                                                'order' => [
                                                    'type' => 'order',
                                                    'label' => 'PLUGIN_ADMIN.PAGE_ORDER',
                                                    'sitemap' => NULL
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'overrides' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.OVERRIDES',
                                    'underline' => true,
                                    'fields' => [
                                        'header.dateformat' => [
                                            'toggleable' => true,
                                            'type' => 'select',
                                            'size' => 'medium',
                                            'selectize' => [
                                                'create' => true
                                            ],
                                            'label' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT',
                                            'help' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT_HELP',
                                            'placeholder' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT_PLACEHOLDER',
                                            'data-options@' => '\\Grav\\Common\\Utils::dateFormats',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'header.menu' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_ADMIN.MENU',
                                            'toggleable' => true,
                                            'help' => 'PLUGIN_ADMIN.MENU_HELP'
                                        ],
                                        'header.slug' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_ADMIN.SLUG',
                                            'toggleable' => true,
                                            'help' => 'PLUGIN_ADMIN.SLUG_HELP',
                                            'validate' => [
                                                'message' => 'PLUGIN_ADMIN.SLUG_VALIDATE_MESSAGE',
                                                'rule' => 'slug'
                                            ]
                                        ],
                                        'header.redirect' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_ADMIN.REDIRECT',
                                            'toggleable' => true,
                                            'help' => 'PLUGIN_ADMIN.REDIRECT_HELP'
                                        ],
                                        'header.process' => [
                                            'type' => 'checkboxes',
                                            'label' => 'PLUGIN_ADMIN.PROCESS',
                                            'toggleable' => true,
                                            'config-default@' => 'system.pages.process',
                                            'default' => [
                                                'markdown' => true,
                                                'twig' => false
                                            ],
                                            'options' => [
                                                'markdown' => 'Markdown',
                                                'twig' => 'Twig'
                                            ],
                                            'use' => 'keys'
                                        ],
                                        'header.child_type' => [
                                            'type' => 'select',
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_ADMIN.DEFAULT_CHILD_TYPE',
                                            'default' => 'default',
                                            'placeholder' => 'PLUGIN_ADMIN.USE_GLOBAL',
                                            'data-options@' => '\\Grav\\Common\\Page\\Pages::types'
                                        ],
                                        'header.routable' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_ADMIN.ROUTABLE',
                                            'help' => 'PLUGIN_ADMIN.ROUTABLE_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'header.cache_enable' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_ADMIN.CACHING',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'header.visible' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_ADMIN.VISIBLE',
                                            'help' => 'PLUGIN_ADMIN.VISIBLE_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'header.template' => [
                                            'type' => 'text',
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_ADMIN.DISPLAY_TEMPLATE'
                                        ],
                                        'header.append_url_extension' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_ADMIN.APPEND_URL_EXT',
                                            'toggleable' => true,
                                            'help' => 'PLUGIN_ADMIN.APPEND_URL_EXT_HELP'
                                        ],
                                        'header.order_by' => [
                                            'type' => 'hidden'
                                        ],
                                        'header.order_manual' => [
                                            'type' => 'hidden',
                                            'validate' => [
                                                'type' => 'commalist'
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
        ]
    ]
];
