<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Check Groups
    |--------------------------------------------------------------------------
    |
    | You can define different groups of checks. By default, we define a
    | "shallow" and "deep" group, which should be fine for most applications,
    | but there's no limit to the number of groups you can define.
    |
    | Each test within the group has a unique name (the array ket that it's
    | registered as), and a 'class' and 'settings' parameter. The 'class'
    | parameter must be an instance of \Chex\Contracts\Checkable, and the
    | 'settings' array will be passed to its check() method.
    |
    | There is no uniqueness constraint on the 'class' value, so it is
    | possible (but maybe not recommended), to run the same checker multiple
    | times with different settings.
    |
    */
    'groups' => [
        'shallow' => [
            'php' => [
                'class' => '\Chex\Checks\PHPVersionCheck',
                'settings' => [],
            ],
            'host' => [
                'class' => '\Chex\Checks\HostDataCheck',
                'settings' => [],
            ],
        ],
        'deep' => [
            'php' => [
                'class' => '\Chex\Checks\PHPVersionCheck',
                'settings' => [],
            ],
            'host' => [
                'class' => '\Chex\Checks\HostDataCheck',
                'settings' => [],
            ],
            'cache' => [
                'class' => '\Chex\Checks\LaravelCacheCheck',
                'settings' => [],
            ],
            'database' => [
                'class' => '\Chex\Checks\LaravelDatabaseCheck',
                'settings' => [
                    'connection_name' => 'default'
                ],
            ]
        ]
    ]
];