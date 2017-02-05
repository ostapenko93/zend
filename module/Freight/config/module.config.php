<?php

return [
    'controllers' => [
        'invokables' => [
            'Freight\Controller\Index' => 'Freight\Controller\IndexController',
        ],
    ],
    'router' => [
        'routes' => [
            'freight' => [
                'type'    => 'segment',
                'options' => [
                    'route'    => '/freight/[:action/][:id/]',
                    'defaults' => [
                        'controller' => 'Freight\Controller\Index',
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
