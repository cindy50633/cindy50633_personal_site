<?php
namespace Tutorial;
use Zend\ServiceManager\Factory\InvokableFactory;
use Zend\Router\Http\Segment;
return [
   'controllers' => [
      'factories' => [
         Controller\TutorialController::class => InvokableFactory::class,
      ],
   ],
   'router' => [
      'routes' => [
         'tutorial' => [
            'type'    => Segment::class,
               'options' => [
                  'route' => '/tutorial[/:action[/:id]]',
                  'constraints' => [
                     'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                     'id'     => '[0-9]+',
                  ],
                  'defaults' => [
                     'controller' => Controller\TutorialController::class,
                     'action'     => 'index',
                  ],
               ],
            ],
      ],
   ],
   'view_manager' => [
      'template_path_stack' => ['tutorial' => __DIR__ . '/../view',],
   ],
];
