<?php

namespace Routes;

use Core\Router\BramusRouter;

class AppRouter {
    public function defineRoutes (BramusRouter $router) : void {
        $router->get('/', "HomeController@index");
        $router->set404(function () {
            header('location: /');
        });
    }
}