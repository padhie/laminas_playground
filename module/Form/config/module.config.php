<?php

declare(strict_types=1);

namespace Form;

use Laminas\Router\Http\Method;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'form.get' => [
                'type'    => Method::class,
                'options' => [
                    'verb' => 'get',
                    'route' => '/form',
                    'defaults' => [
                        'controller' => Controller\FormController::class,
                        'action'     => 'get',
                    ],
                ],
            ],

            'form.post' => [
                'type'    => Method::class,
                'options' => [
                    'verb' => 'post',
                    'route' => '/form',
                    'defaults' => [
                        'controller' => Controller\FormController::class,
                        'action'     => 'post',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\FormController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
