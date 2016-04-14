<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/user/themes/cosmicdropper/blueprints/event.yaml',
    'modified' => 1460604209,
    'data' => [
        'title' => 'Event',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'event' => [
                            'type' => 'tab',
                            'title' => 'Event',
                            'fields' => [
                                'header.event_name' => [
                                    'type' => 'text',
                                    'label' => 'Name'
                                ],
                                'header.event_city' => [
                                    'type' => 'text',
                                    'label' => 'Event City'
                                ],
                                'header.event_country' => [
                                    'type' => 'text',
                                    'label' => 'Event Country'
                                ],
                                'header.event_date' => [
                                    'type' => 'Datetime',
                                    'label' => 'Event Date'
                                ],
                                'header.event_tickets' => [
                                    'type' => 'text',
                                    'label' => 'Link to Buy Tickets'
                                ],
                                'route' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.PARENT',
                                    'classes' => 'fancy',
                                    '@data-options' => '\\Grav\\Common\\Page\\Pages::parents',
                                    '@data-default' => '\\Grav\\Plugin\\admin::route',
                                    'options' => [
                                        '/' => 'PLUGIN_ADMIN.DEFAULT_OPTION_ROOT'
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