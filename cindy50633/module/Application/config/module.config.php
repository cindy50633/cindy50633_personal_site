<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
// use Zend\Mvc\Router\Http\Regex;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'home' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/index[/:lang][/:end]',
                    'constraints' => [
                        'lang' => 'ja||en||zh',
                        'end' => '/*'
                    ],
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        // 'action'     => 'index'
                    ],
                ],
            ],
            'application' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '[/:action][/:lang][/:end]',
                    'constraints' => [
                        'lang' => 'ja||en||zh',
                        'end' => '/*'
                    ],
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' => 'index',
                        // 'lang' => 'en'
                    ],
                ],
            ],
            'game' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/game[/:action][/:lang][/:end]',
                    'constraints' => [
                        'lang' => 'ja||en||zh',
                        'end' => '/*'
                    ],
                    'defaults' => [
                        'controller' => Controller\GameController::class,
                        'action' => 'game',
                        // 'lang' => 'en'
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
            Controller\GameController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        // 'base_path' => __DIR__ . '/../../../public',
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'view_helpers' => [
        'aliases' => [
            'contentHelper' => View\Helper\ContentHelper::class,
        ],
        'factories' => [
            View\Helper\ContentHelper::class => InvokableFactory::class,
        ],
    ],
];
