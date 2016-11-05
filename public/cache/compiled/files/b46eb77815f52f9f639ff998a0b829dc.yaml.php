<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/user/config/site.yaml',
    'modified' => 1477807593,
    'data' => [
        'title' => 'D Double E - Grime MC',
        'author' => [
            'name' => 'D Double E',
            'email' => 'blukuwear@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'D Double E is a living legend in the Grime scene and considered by many to be the greatest MC of all time.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/news'
        ]
    ]
];
