<?php

return [
    'controllers' => [
        'invokables' => [
            'Electro\Controller\Index' => 'Electro\Controller\IndexController',
        ],
    ],
    'router' => [
        'routes' => [
            'electro' => [
                'type'    => 'segment',
                'options' => [
                    'route'    => '/electro/[:action/][:id/]',
                    'defaults' => [
                        'controller' => 'Electro\Controller\Index',
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
