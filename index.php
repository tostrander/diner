<?php

// 328/diner/index.php
// This is my CONTROLLER!

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the necessary files
require_once ('vendor/autoload.php');

// Instantiate the F3 Base class (the router)
$f3 = Base::instance();
$con = new Controller($f3);

// Define a default route
// https://tostrander.greenriverdev.com/328/hello-fat-free/
$f3->route('GET /', function() {
    $GLOBALS['con']->home();
});

// Breakfast menu
$f3->route('GET /menus/breakfast', function() {
    $GLOBALS['con']->breakfast();
});

// Lunch menu
$f3->route('GET /menus/lunch', function() {
    //echo '<h1>My Breakfast Menu</h1>';

    // Render a view page
    $view = new Template();
    echo $view->render('views/lunch-menu.html');
});

// Dinner menu
$f3->route('GET /menus/dinner', function() {
    //echo '<h1>My Breakfast Menu</h1>';

    // Render a view page
    $view = new Template();
    echo $view->render('views/dinner-menu.html');
});

// Order Summary
$f3->route('GET /summary', function($f3) {

    // Write data to database


    // Render a view page
    $view = new Template();
    echo $view->render('views/order-summary.html');

    //var_dump ( $f3->get('SESSION') );
    session_destroy();
});

// Order Form Part I
$f3->route('GET|POST /order1', function() {
    $GLOBALS['con']->order1();
});

// Order Form Part II
$f3->route('GET|POST /order2', function() {
    $GLOBALS['con']->order2();
});

// Run Fat-Free
$f3->run();
