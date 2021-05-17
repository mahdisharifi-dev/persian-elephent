<?php

namespace Core\View;

class View {

    public function __construct() {}

    public static function render ($view, $data = null, $var_name = "data") {
        $$var_name = $data;
        require_once __DIR__ . "/../../app/views/{$view}.php";
    }

}