<?php
/*
 * Bootstrap file for initial project
 * @Author: Prawee Wongsa prawee@hotmail.com 
 * @Date: 2017-10-04 15:26:25 
 * @Last Modified by: Prawee Wongsa
 * @Last Modified time: 2017-10-04 15:41:33
 */

/*
 * Require vendor and dependencies
 */
require_once __DIR__.'/vendor/autoload.php';

/*
 * Create an instance
 */
$app = new Silex\Application();

/*
 * Configuration of instance
 * Set default developing mode is true
 */
$app['debug'] = true;

/*
 * Routing
 */
$app->get('/', function() {
    return 'Hi! Silex.';
});

/*
 * Run the application
 */
$app->run();
