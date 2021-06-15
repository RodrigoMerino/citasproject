<?php

namespace Core;

use AltoRouter;

class RouterHandler
{


    protected $match;
    protected $controller;
    protected $Action;

    function __construct(altoRouter $router)
    {
        $this->match = $router->match();


        if ($this->match) {
            list($controller, $tmethod) = explode('@', $this->match['target']);
            $this->controller = $controller;
            $this->method = $tmethod;
            if (is_callable(array(new $this->controller, $this->method))) {
                call_user_func_array(array(new $this->controller, $this->method),$this->match['params']);
            } else {
                echo 'the method' . $this->method . 'is not defined in' . $this->controller;
            }
        } else {
            echo ' page no found';
        }
    }
}
