<?php

namespace App\Controllers;

use Core\View\View;

class HomeController extends Controller {

    public function index () {
        View::render('home');
    }

}

