<?php

namespace Bootstrap;

use Core\Router\Route;
use Database\Database;

class Bootstrap {

    public function __construct()
    {

        // Set the illuminate database
        $database = new Database();

        // Set the routes
        $router = new Route();

    }

}
