<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/system/blueprints/user/account.yaml',
    'modified' => 1477807593,
    'data' => [
        'title' => 'Site',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'info' => [
                    'type' => 'userinfo',
                    'size' => 'large'
                ],
                'content' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.ACCOUNT',
                    'underline' => true
                ],
                'username' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.USERNAME',
                    'disabled' => true,
                    'readonly' => true
                ],
                'email' => [
                    'type' => 'email',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.EMAIL',
                    'validate' => [
                        'type' => 'email',
                        'message' => 'PLUGIN_ADMIN.EMAIL_VALIDATION_MESSAGE',
                        'required' => true
                    ]
                ],
                'password' => [
                    'type' => 'password',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.PASSWORD',
                    'validate' => [
                        'required' => false,
                        'message' => 'PLUGIN_ADMIN.PASSWORD_VALIDATION_MESSAGE',
                        'pattern' => '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'
                    ]
                ],
                'fullname' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.FULL_NAME',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'title' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.TITLE'
                ],
                'language' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_ADMIN.LANGUAGE',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'data-options@' => '\\Grav\\Plugin\\admin::adminLanguages',
                    'default' => 'en',
                    'help' => 'PLUGIN_ADMIN.LANGUAGE_HELP'
                ],
                'security' => [
                    'title' => 'PLUGIN_ADMIN.ACCESS_LEVELS',
                    'type' => 'section',
                    'security' => 'admin.super',
                    'underline' => true,
                    'fields' => [
                        'groups' => [
                            'type' => 'selectize',
                            'size' => 'large',
                            'label' => 'PLUGIN_ADMIN.GROUPS',
                            'data-options@' => '\\Grav\\User\\Groups::groups',
                            'classes' => 'fancy',
                            'help' => 'PLUGIN_ADMIN.GROUPS_HELP',
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ],
                        'access.admin' => [
                            'type' => 'array',
                            'label' => 'PLUGIN_ADMIN.ADMIN_ACCESS',
                            'multiple' => false,
                            'validate' => [
                                'type' => 'array'
                            ]
                        ],
                        'access.site' => [
                            'type' => 'array',
                            'label' => 'PLUGIN_ADMIN.SITE_ACCESS',
                            'multiple' => false,
                            'validate' => [
                                'type' => 'array'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
