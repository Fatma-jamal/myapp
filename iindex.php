<?php

// Define a constant
define('ROOT_PATH', '/myapp/');
define('BASE_PATH', __DIR__);

require_once('config.php');
require_once('core/application.php');

use Tamm\Core\Application;

$app = Application::getInstance($config);

// $container = $app->getContainer();

$app->run();

// $request = $container->get('Tamm\Core\HttpRequest');
//
// $response->send();
// //
// echo '<pre>';
// var_dump($request);
// echo '</pre>';


