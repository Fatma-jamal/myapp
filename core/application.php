<?php

namespace Tamm\Core;

require_once('module.php');

use Tamm\Core\MyAppModule;

class MyAppApplication {

    private $configurations = array();

    public function __construct($configurations = array())
    {
        $this->configurations = $configurations;
    }

    public function loadModulesMetadata(){
        
        $instance = new MyAppModule();

        $modules = array();

        foreach ($this->configurations['modules'] as $module) {
            $content = $instance->loadModuleMetadata($module);
            if ($content) {
                // Convert JSON to array
                $modules[$module] = json_decode($content, true);
            }
        }

        return $modules;
    }
}
