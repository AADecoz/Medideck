<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u,d',
            'records' => 'c,r,u,d'
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u,d',
            'payments' => 'c,r,u,d',
            'records' => 'c,r,u,d'
        ],
        'moderator' => [
            'user' => 'r,u',
            'profile' => 'c,r,u',
            'records' => 'c,r,u'

        ],
        'target' => [
            'user' => 'r',
            'profile' => 'r,u',
            'records' => 'c,r',
        ],
        'user' => [
            'profile' => 'r,u',
            'records' => 'r'
        ],


    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
