<?php

namespace Tamm\Core;

class System {


    public function loadModulesMetadata($configurations = array()){
        $instance = new Module();
        $modules = array();
        foreach ($configurations['modules'] as $module) {
            $content = $instance->loadModuleMetadata($module);
            if ($content) {
                // Convert JSON to array
                $modules[$module] = json_decode($content, true);
            }
        }

        return $modules;
    }
}
