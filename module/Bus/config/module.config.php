<?php

return [
    'controllers' => [
        'invokables' => [
            'Bus\Controller\Index' => 'Bus\Controller\IndexController',
        ],
    ],
    'router' => [
        'routes' => [
            'bus' => [
                'type'    => 'segment',
                'options' => [
                    'route'    => '/bus/[:action/][:id/]',
                    'defaults' => [
                        'controller' => 'Bus\Controller\Index',
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
