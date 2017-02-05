<?php

return [
    'controllers' => [
        'invokables' => [
            'Car\Controller\Index' => 'Car\Controller\IndexController',
        ],
    ],
    'router' => [
        'routes' => [
            'car' => [
                'type'    => 'segment',
                'options' => [
                    'route'    => '/car/[:action/][:id/]',
                    'defaults' => [
                        'controller' => 'Car\Controller\Index',
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
