<?php 

class Router{

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;

    }

    public function get($uri,$controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }
    public function post($uri,$controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri,$requestType){
        if(array_key_exists($uri,$this->routes[$requestType])){
            $uri = explode('@',$this->routes[$requestType][$uri]);
            $controller = $uri[0];
            $action = $uri[1];
            return (new $controller)->$action();
        }

        throw new Exception('This route is not defined');
    }

}