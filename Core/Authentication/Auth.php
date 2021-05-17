<?php 

namespace Core\Authentication;

use App\Models\User;
use Core\storage\Session;

class Auth implements Authenticable {

    public static function login ($username, $password) : User {
        $user = User::where(config('auth')['unique'], $username)->where('password', sha1($password))->first();
        Session::set('auth', $user);
        return $user;
    }

    public static function logout () {
        Session::remove('auth');
    }

    public static function user () : User {
        return Session::get('auth');
    }

    public static function id () : int {
        return Session::get('auth')->id;
    }

    public static function check () : bool {
        return Session::get('auth') ? true : false;
    }

}
