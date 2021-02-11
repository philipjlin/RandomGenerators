<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1);

class HomeController extends Controller {

    public function __construct() {
    }

    /**
    * Responds to requests to GET /home
    */
    public function getIndex() {

        return view('Home.index');
    }

}
