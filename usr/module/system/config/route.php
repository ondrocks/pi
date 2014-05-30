<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt BSD 3-Clause License
 */

/**
 * Route specs
 *
 * @author Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */
return array(
    // default route
    'default'   => array(
        'name'      => 'default',
        'section'   => 'front',
        'priority'  => -999,

        'type'      => 'Standard',
        'options'   =>array(
            'structure_delimiter'   => '/',
            'param_delimiter'       => '/',
            'key_value_delimiter'   => '-',
            'defaults'              => array(
                'module'        => 'system',
                'controller'    => 'index',
                'action'        => 'index',
            )
        )
    ),

    // Home route
    'home'  => array(
        'name'      => 'home',
        'type'      => 'Home',
        'priority'  => 10000,

        'options'   =>array(
            'structure_delimiter'   => '-',
            'param_delimiter'       => '/',
            'key_value_delimiter'   => '-',
        ),
    ),

    // admin route
    'admin' => array(
        'name'      => 'admin',
        // section, default as 'front'
        'section'   => 'admin',
        'priority'  => 100,

        'type'      => 'Standard',
        'options'   => array(
            'prefix'     => '/admin',
        ),
    ),

    // API route
    'api' => array(
        'name'      => 'api',
        'section'   => 'api',
        'priority'  => 100,

        'type'      => 'Api',
        'options'   => array(
            'prefix'     => '/api',
        ),
    ),

    // feed route
    'feed' => array(
        'name'      => 'feed',
        'section'   => 'feed',
        'priority'  => 100,

        'type'      => 'Feed',
        'options'   => array(
            'prefix'     => '/feed',
        ),
    ),

    // System user route
    'sysuser'   => array(
        'name'      => 'sysuser',
        'type'      => 'Module\System\Route\User',
        'priority'  => 5,
        'options'   => array(
            'prefix'    => '/system/user',
        ),
    ),
);
