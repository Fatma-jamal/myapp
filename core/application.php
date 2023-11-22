<?php

namespace Tamm\Core;

require_once(__DIR__.'/bootstrap.php');

use Tamm\Core\Bootstrap;
use Tamm\Core\Container;

class Application {

    //
    private static $instance;
    //
    private $bootstrap;
    //
    private $container;
    //
    private $modules = array();
    //
    private $configurations = array();

    private function __construct($configurations = array())
    {
        $this->configurations = $configurations;
        // $this->loadModulesMetadata();

        $this->bootstrap        = Bootstrap::getInstance();
        $this->container        = Container::getInstance();
    }

    public static function getInstance($configurations = array()) {
        if (!self::$instance) {
            self::$instance = new self($configurations);
        }

        return self::$instance;
    }

    public function getContainer(){
        return $this->container;
    }

    public function run(){
        $this->bootstrap->handleHttpRequest($this->container);

        $template = new TemplateEngine(BASE_PATH."/themes/basic/layout/index.html","");
        $body = $template->render();
        // echo $body; exit;
        $response = $this->container->get('Tamm\Core\HttpResponse');
        // $response->setHeaders(array());
        $response->setStatusCode(200);
        $response->setBody($body);
        $response->send();
    }

}
