<?php

namespace Core\Authentication;

use App\Models\User;

interface Authenticable {

    public static function login ($username, $password) : User;

    public static function logout ();

    public static function user () : User;

    public static function id () : int;

    public static function check () : bool;

}