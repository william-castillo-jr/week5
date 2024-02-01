<?php
/**
 * William Castillo Jr
 * February 1st, 2024
 * https://github.com/william-castillo-jr/week5
 * This is my Controller for the Week5 Page
 */

// error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require autoload file
require_once('vendor/autoload.php');

// instantiate fat-free framework
$f3 = Base::instance();

// default route
$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->run();