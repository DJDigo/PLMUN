<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
Router::connect(
    '/superadmin/login',
    ['controller' => 'Users', 'action' => 'login']
);
Router::connect(
    '/superadmin/index',
    ['controller' => 'Users', 'action' => 'index']
);
Router::connect(
    '/superadmin/logout',
    ['controller' => 'Users', 'action' => 'logout']
);
Router::connect(
    '/superadmin/edit_dean',
    ['controller' => 'Users', 'action' => 'edit_dean']
);
Router::connect(
    '/superadmin/edit_staff',
    ['controller' => 'Users', 'action' => 'edit_staff']
);
Router::connect(
    '/superadmin/view_department',
    ['controller' => 'Users', 'action' => 'view_department']
);
Router::connect(
    '/superadmin/reviews',
    ['controller' => 'Users', 'action' => 'reviews']
);
Router::connect(
    '/superadmin/view_review',
    ['controller' => 'Users', 'action' => 'view_review']
);
Router::connect(
	'/', 
	['controller' => 'pages', 'action' => 'dashboard']
);

//CITCS
Router::connect(
    '/superadmin/departments/citcs',
    ['controller' => 'departments', 'action' => 'citcs']
);
Router::connect(
    '/superadmin/dean/:id',
    ['controller' => 'departments', 'action' => 'dean_edit'],
    ['pass' => ['id']]
);
Router::connect(
    '/superadmin/faculty/:id',
    ['controller' => 'departments', 'action' => 'faculty_edit'],
    ['pass' => ['id']]
);
Router::connect(
    '/feedback',
    ['controller' => 'pages', 'action' => 'feedback']
);
Router::connect(
    '/aboutus',
    ['controller' => 'pages', 'action' => 'aboutus']
);
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	// Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';

