<?php

return [
    'Administrador' => [
        'type' => 1,
        'children' => [
            'permisoAdmin',
        ],
    ],
    'permisoAdmin' => [
        'type' => 2,
        'description' => 'Acceso a todas las URL\'s del sistema',
        'children' => [
            '/*',
        ],
    ],
    '/*' => [
        'type' => 2,
    ],
];
