<?php

namespace App\Routing;
use AltoRouter;
use App\Controllers\BaseController;
class RouteDispatcher
{
    private $match;
    private $controller;
    private $method;
    public function __construct(AltoRouter $router)
    {
        $this->match = $router->match();
        if ($this->match){
            list($this->controller,$this->method) = explode('@',$this->match['target']);
            if (is_callable([new $this->controller,$this->method])){
                call_user_func([new $this->controller,$this->method],$this->match['params']);
            }else{
                echo "canot";
            }
        }else{
            header($_SERVER["SERVER_PROTOCOL"]."404 not found!");
            echo "Not match";
        }
    }
}