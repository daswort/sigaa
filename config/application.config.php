<?php
return array(
    'modules' => array(
        'Application',
        'Usuario',
        'TipoUsuario',
        'Asignatura',
        'Seccion',

        /*MODULOS EXTERNOS*/
        'DoctrineModule',
        'DoctrineORMModule',
        'ZendDeveloperTools',
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
);
