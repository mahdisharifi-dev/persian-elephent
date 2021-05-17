<?php namespace Database;

use Illuminate\Database\Capsule\Manager as Capsule;


class Database {

    public function __construct() {

        $config = require_once("../Config/app.php");

        $capsule = new Capsule();
        $capsule->addConnection([
            'driver'    => $config['database']['driver'],
            'host'      => $config['database']['host'],
            'database'  => $config['database']['database'],
            'username'  => $config['database']['username'],
            'password'  => $config['database']['password'],
            'charset'   => $config['database']['charset'],
            'collation' => $config['database']['collation'],
            'prefix'    => $config['database']['prefix'],
        ]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();

    }

}

