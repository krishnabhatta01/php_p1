<?php

namespace app\core;

class Router{   
    public Request $request;
    protected array $routes = [];
    public Response $response;

    public function __construct (Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }


    function get($path, $callback ){
        $this->routes['get'][$path] = $callback;
    }

    function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    function resolve(){
       $path= $this->request->getPath();
       $method = $this->request->getMethod();
       $callback = $this->routes[$method][$path] ?? false;
       if($callback === false){
        $this->response->setStatusCode(404);
        return $this->renderView("404");
        
       }

       if(is_string($callback)){
            return $this->renderView($callback);
       }
       echo call_user_func($callback);
    }

    public function renderContent($viewContent)
    {
        $layoutcontent = $this->layoutcontent();
        
        return str_replace('{{content}}', $viewContent, $layoutcontent);
       
    }

    public function renderView($view){
        $layoutcontent = $this->layoutcontent();
        $viewcontent = $this->renderOnlyView($view);
        return str_replace('{{content}}', $viewcontent , $layoutcontent);
        
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
