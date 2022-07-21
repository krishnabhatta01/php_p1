<?php

namespace app\core;

class Router{   
    public Request $request;
    protected array $routes = [];

    public function __construct (\app\core\Request $request)
    {
        $this->request = $request;
    }


    function get($path, $callback ){
        $this->routes['get'][$path] = $callback;
    }

    function resolve(){
       $path= $this->request->getPath();
       $method = $this->request->getMethod();
       $callback = $this->routes[$method][$path] ?? false;
       if($callback === false){
        echo "not found";
        
       }

       if(is_string($callback)){
            return $this->renderView($callback);
       }
       echo call_user_func($callback);
    }

    public function renderView($view){
        $layoutcontent = $this->layoutcontent();
        $viewcontent = $this->renderOnlyView($view);
        return str_replace('{{content}}', $viewcontent , $layoutcontent);
        include_once Application::$ROOT_DIR ."/views/$view.php" ;
    }

    /* protected */function layoutcontent(){
        ob_start();
        include_once Application::$ROOT_DIR . "/views/layouts/main.php";
        return ob_get_clean();

    }

    function renderOnlyView($view){
        ob_start();
        include_once Application::$ROOT_DIR . "/views/$view.php";
        return ob_get_clean();
    }

}
