<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Jobsempire\Controller\Jobsempire' => 'Jobsempire\Controller\JobsempireController',
        ),
    ),
	
    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'jobsempire' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/jobsempire[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Jobsempire\Controller\Jobsempire',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
	
    'view_manager' => array(
        'template_path_stack' => array(
            'jobsempire' => __DIR__ . '/../view',
        ),
    ),
);