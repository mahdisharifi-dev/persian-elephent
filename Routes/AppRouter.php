<?php

namespace Routes;

use Core\Router\BramusRouter;

class AppRouter {
    public function defineRoutes (BramusRouter $router) : void {
        $router->get('/', "HomeController@index");
        $router->get('/dashboard', "HomeController@dashboard");
        $router->set404(function () {
            header('location: /');
        });
    }
}