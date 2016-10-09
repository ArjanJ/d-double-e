<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/user/plugins/date/blueprints.yaml',
    'modified' => 1475249934,
    'data' => [
        'name' => 'Auto Date',
        'version' => '1.0.1',
        'description' => 'Automatically adds date to frontmatter when creating a new page via Grav Admin plugin',
        'icon' => 'clock-o',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org'
        ],
        'homepage' => 'https://github.com/team-grav/grav-plugin-auto-date',
        'keywords' => 'plugin, auto-date, date, frontmatter',
        'bugs' => 'https://github.com/team-grav/grav-plugin-auto-date/issues',
        'docs' => 'https://github.com/team-grav/grav-plugin-auto-date/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'admin',
                'version' => '>=1.2.3'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
