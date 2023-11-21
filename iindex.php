<?php

// Define a constant
define('ROOT_PATH', '/myapp/');

use Tamm\Core\MyAppApplication;

require_once('config.php');
require_once('core/application.php');

$instance = new MyAppApplication($config);

$modules = $instance->loadModulesMetadata();

echo "<pre>";
print_r($modules);
echo "</pre>";

