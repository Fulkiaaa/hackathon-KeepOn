<?php 
    namespace App\utils;


    class Router
    {
        private Array $routes = [];


        private function addRoute(
            String $method,
            String $uri,
            String $controller,
            String $action,
        ) {
            $this->routes[] = [
                'uri'        => $uri === '/' ? [] : explode('/', substr($uri, 1)),
                'method'     => $method,
                'controller' => $controller,
                'action'     => $action,
            ];
        }

        public function get(
            String $uri,
            String $controller,
            String $action,
        ) {
            $this->addRoute('GET', $uri, $controller, $action);
        }

        public function post(
            String $uri,
            String $controller,
            String $action,
        ) {
            $this->addRoute('POST', $uri, $controller, $action);
        }

        public function run(
            String $uri,
        ) {
            $uri = $uri === '/' ? [] : explode('/', substr($uri, 1));
            $length = count($uri);
            $valid = false;
            $routeId = 0;
            $params = [];
            foreach ($this->routes as $route)
            {
                if ($length === count($route['uri']))
                {
                    $params = [];
                    $valid = true;
                    for ($i = 0; $i < $length; $i++)
                    {
                        if ($route['uri'][$i][0] === '$') {$params[substr($route['uri'][$i], 1)] = $uri[$i];}
                        else if ($uri[$i] !== $route['uri'][$i])
                        {
                            $valid = false;
                            break;
                        }
                    }
                    if ($valid) {break;}
                }
                $routeId++;
            }
            if ($valid)
            {
                require_once(ROOT_PATH.'/app/controllers/'.$this->routes[$routeId]['controller'].'Controller.php');
                $class = '\\App\\controllers\\'.$this->routes[$routeId]['controller'].'Controller';
            }
            match (true)
            {
                !$valid                                                          => (new \App\controllers\Controller())->error(404),
                $_SERVER['REQUEST_METHOD'] !== $this->routes[$routeId]['method'] => (new \App\controllers\Controller())->error(405),
                default                                                          => (new $class())->{$this->routes[$routeId]['action']}($params),
            };
            die();
        }

    }
?>