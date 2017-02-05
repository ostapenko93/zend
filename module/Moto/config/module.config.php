<?php

return [
    'controllers' => [
        'invokables' => [
            'Moto\Controller\Index' => 'Moto\Controller\IndexController',
        ],
    ],
    'router' => [
        'routes' => [
            'moto' => [
                'type'    => 'segment',
                'options' => [
                    'route'    => '/moto/[:action/][:id/]',
                    'defaults' => [
                        'controller' => 'Moto\Controller\Index',
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
