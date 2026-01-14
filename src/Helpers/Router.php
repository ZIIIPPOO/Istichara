<?php

class Router
{
    private static array $routes = []; 
    // '' => ['AvocatController', 'home'],
    // 'test' => ['AvocatController', 'test'],
    // 'avocat/create' => ['AvocatController', 'create']

    public static function get($path, $controller, $method)
    {
        self::$routes[$path] = [$controller, $method];
    }
    public static function dispatch()
    {
        $page = $_GET['url'] ?? '';

        if(isset(self::$routes[$page]))
        {
            $controller = self::$routes[$page][0];
            $method = self::$routes[$page][1];

            require_once __DIR__ . "/../Controllers/$controller.php";

            $c = new $controller;
            $c->$method();
        }
        else
        {
            echo "Page not found";
        }
    }
}


