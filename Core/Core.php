<?php

namespace Core;

class Core
{
public function run ()
{
echo __CLASS__ . "[OK]" . PHP_EOL ;
            $router = new Router();
            require("src/routes.php");
            //var_dump($_SERVER["REQUEST_URI"]);
            $url = substr($_SERVER["REQUEST_URI"], 7);
            $routes = $router->get($url);
            //var_dump($routes);
            $action = $routes["action"];
            $controller = new $routes["Controller"]();
            $controller->$action();
}
} 