<?php

namespace Tamm\Core;

class Container {
    //
    private static $instance;
    //
    protected $bindings = [];
    //
    private $instances = [];

    //
    private function __construct() {
        // echo __FUNCTION__;
    }

    //
    public static function getInstance($configurations = array()) {
        if (!self::$instance) {
            self::$instance = new self($configurations);
        }
        return self::$instance;
    }

    // public function listInstances(){
    //     // print_r($this->instances);
    // }

    public function set($className, $object) {
        if (!isset($this->instances[$className])) {
            $this->instances[$className] = $object;
        }
    }

    public function get($className) {
        if (isset($this->instances[$className])) {
            return $this->instances[$className];
        }
        return null;
    }

    public function bind($abstract, $concrete)
    {
        $this->bindings[$abstract] = $concrete;
    }

    public function resolve($abstract)
    {
        if (isset($this->bindings[$abstract])) {
            $concrete = $this->bindings[$abstract];
            return $concrete($this);
        }

        return null;
    }
}