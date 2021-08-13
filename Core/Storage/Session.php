<?php

namespace Core\storage;

class Session {

    public static function get ($key) {
        self::start_session();
        return isset($_SESSION[$key]) ? $_SESSION[$key] : false;
    }

    public static function set ($key, $value) {
        self::start_session();
        $_SESSION[$key] = $value;
    }

    public static function remove ($key) {
        self::start_session();
        unset($_SESSION[$key]);
    }

    public static function start_session () {
        session_status() === PHP_SESSION_NONE && session_start();
    }


}