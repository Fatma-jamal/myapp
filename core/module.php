<?php

namespace Tamm\Core;

class MyAppModule {

    public function loadModuleMetadata($module) {
        $file_path = 'modules/' . $module .'/' . $module . '.json';
        // Check if the file exists
        if (file_exists($file_path) && is_file($file_path)) {
            return file_get_contents($file_path);
        } else {
            return null; // File not found
        }
    }

    
}