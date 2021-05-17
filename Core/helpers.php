<?php

function getEnvData (string $envName) : string {
    $dotEnv = new \Symfony\Component\Dotenv\Dotenv();
    $dotEnv->load(__DIR__ . '/../.env');
    return $_ENV[$envName] ?? die("Error: {$envName} is not set.");
}

function request (string $method) {
    if (strtolower($method) == "get") {
        return $_GET;
    }

    if (strtolower($method) == "post") {
        return $_POST;
    }
}

function config ($type) {
    $config = require("../Config/app.php");
    return $config[$type];
}
