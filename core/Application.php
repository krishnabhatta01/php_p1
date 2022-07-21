<?php

namespace app\core;

class Application {

    public static string $ROOT_DIR;
    public Request $request;
    public Router $router;
    public function __construct($rootPath){
        self::$ROOT_DIR = $rootPath; 
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    function run(){

        echo $this->router->resolve();


    }
    
}





?>