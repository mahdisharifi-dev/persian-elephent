<?php

namespace Core\Router;

use Core\Router\BramusRouter;
use Routes\AppRouter;

class Route extends AppRouter {

    public function __construct()
    {
        $this->runRouter(); // Run The App Router
    }

    public function runRouter () : void {
        $router = new BramusRouter();
        $router->setNamespace('App\Controllers');
        $this->defineRoutes($router);
        $router->run();
    }
}
